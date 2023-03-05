<?php

namespace App\Controller;

use App\Grpc\Mall\ProductSrv\ProductCreateRequest;
use App\Grpc\Mall\ProductSrv\ProductId;
use App\Grpc\Mall\ProductSrv\ProductListReply;
use App\Grpc\Mall\ProductSrv\ProductListRequest;
use App\Grpc\Mall\ProductSrv\ProductSrvInterface;
use App\Grpc\Mall\ProductSrv\ProductStockReply;
use App\Grpc\Mall\ProductSrv\ProductStockRequest;
use App\Model\Product;
use Hyperf\Grpc\StatusCode;
use Hyperf\GrpcServer\Exception\GrpcException;

class ProductSrvController implements ProductSrvInterface
{

    public function create(ProductCreateRequest $request): ProductId
    {
        //@todo 可以将数据访问再抽一层再通过di注入，这边为了简单演示就不搞复杂了
        $new = Product::create([
            "title" => $request->getTitle(),
            "icon" => $request->getIcon(),
            "stock" => 0
        ]);
        return new ProductId(['id' => $new->id]);
    }

    public function getList(ProductListRequest $request): ProductListReply
    {
        $query = Product::query();
        //@todo 这里可以再自行实现 条件查询
        $total = $query->count();
        $list = [];
        /**
         * @var Product $item
         */
        foreach ($query->skip(($request->getPage() - 1) * $request->getPageSize())
                     ->take($request->getPageSize())
                     ->orderByDesc("id")
                     ->get() as $item) {
            $list[] = (new \App\Grpc\Mall\ProductSrv\Product())
                ->setId($item->id)
                ->setIcon($item->icon)
                ->setStock($item->stock)
                ->setTitle($item->title)
                ->setCreatedAt((string)$item->created_at)
                ->setUpdatedAt((string)$item->updated_at);
        }
        return new ProductListReply(compact("total", "list"));
    }

    public function getStock(ProductId $request): ProductStockReply
    {
        $product = $this->getProduct($request->getId());
        return (new ProductStockReply())->setStock($product->stock ?? 0);
    }

    public function incStock(ProductStockRequest $request): ProductStockReply
    {
        $product = $this->getProduct($request->getId());
        $product->stock += $request->getStock();
        $product->save();
        return (new ProductStockReply())->setStock($product->stock);
    }

    public function decStock(ProductStockRequest $request): ProductStockReply
    {
        $product = $this->getProduct($request->getId());
        $product->stock -= $request->getStock();
        $product->save();
        return (new ProductStockReply())->setStock($product->stock);
    }

    private function getProduct(int $id): ?Product {
        $product = Product::where("id","=", $id)->first();
        if(!$product) throw new GrpcException("product not found", StatusCode::ABORTED);
        return $product;
    }
}