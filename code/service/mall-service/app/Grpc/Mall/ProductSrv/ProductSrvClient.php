<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Grpc\Mall\ProductSrv;

/**
 */
class ProductSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Grpc\Mall\ProductSrv\ProductCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function decStock(\App\Grpc\Mall\ProductSrv\ProductStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mall.ProductSrv/decStock',
        $argument,
        ['\App\Grpc\Mall\ProductSrv\ProductStockReply', 'decode'],
        $metadata, $options);
    }

}
