<?php

namespace App\Grpc\GrpcClient;

use Crayoon\HyperfGrpcClient\BaseGrpcClient;

/**
 */
class ProductSrvClient extends BaseGrpcClient {  //父类换成 Crayoon\HyperfGrpcClient\BaseGrpcClient

    //注意这里的 构造方法去除

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array  //返回 替换成 array
     */
    public function create(\App\Grpc\Mall\ProductSrv\ProductCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/create',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductId', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function getList(\App\Grpc\Mall\ProductSrv\ProductListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/getList',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductId $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function getStock(\App\Grpc\Mall\ProductSrv\ProductId $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/getStock',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductStockReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function incStock(\App\Grpc\Mall\ProductSrv\ProductStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/incStock',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductStockReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function decStock(\App\Grpc\Mall\ProductSrv\ProductStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/decStock',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductStockReply', 'decode'],
        $metadata, $options);
    }

}
