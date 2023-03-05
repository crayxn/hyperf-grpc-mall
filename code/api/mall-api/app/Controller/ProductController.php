<?php

namespace App\Controller;

use App\Grpc\GrpcClient\ProductSrvClient;
use App\Grpc\Mall\ProductSrv\Product;
use App\Grpc\Mall\ProductSrv\ProductCreateRequest;
use App\Grpc\Mall\ProductSrv\ProductId;
use App\Grpc\Mall\ProductSrv\ProductListReply;
use App\Grpc\Mall\ProductSrv\ProductListRequest;
use Hyperf\Grpc\StatusCode;

//注意这里引入的是 修改后的客户端

class ProductController extends AbstractController
{
    public function __construct(
        protected ProductSrvClient $productSrvClient
    )
    {
    }

    public function create(): array
    {
        $param = $this->request->post();
        //@todo 这里需要验证器验证传参，略

        [$reply, $status] = $this->productSrvClient->create(
            (new ProductCreateRequest())
                ->setTitle($param['title'] ?? '')
                ->setIcon($param['icon'] ?? '')
                ->setStock($param['stock'] ?? 0)
        );
        if ($status != StatusCode::OK) {
            //就直接报错啦
            return [
                "code" => 1,
                "message" => $reply ?? 'fail'
            ];
        }
        /**
         * @var ProductId $reply
         */
        return [
            "code" => 0,
            "message" => 'ok',
            "data" => ["id" => $reply->getId()]
        ];
    }

    public function list(): array
    {
        $param = $this->request->query();

        [$reply, $status] = $this->productSrvClient->getList(
            (new ProductListRequest())
                ->setPage($param['page'] ?? 1)
                ->setPageSize($param['pageSize'] ?? 10)
        );
        if ($status != StatusCode::OK) {
            return [
                "code" => 1,
                "message" => $reply ?? 'fail'
            ];
        }
        $temp = [];
        /**
         * @var ProductListReply $reply
         * @var Product $item
         */
        foreach ($reply->getList() as $item) {
            $temp[] = json_decode($item->serializeToJsonString(),true); //懒人模式
        }
        return [
            "code" => 0,
            "message" => 'ok',
            "data" => [
                "total" => $reply->getTotal(),
                "list" => $temp
            ]
        ];
    }
}