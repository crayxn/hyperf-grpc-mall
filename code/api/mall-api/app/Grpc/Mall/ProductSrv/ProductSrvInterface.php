<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product_srv.proto

namespace App\Grpc\Mall\ProductSrv;

/**
 * Protobuf type <code>mall.ProductSrv</code>
 */
interface ProductSrvInterface
{
    /**
     * Method <code>create</code>
     *
     * @param \App\Grpc\Mall\ProductSrv\ProductCreateRequest $request
     * @return \App\Grpc\Mall\ProductSrv\ProductId
     */
    public function create(\App\Grpc\Mall\ProductSrv\ProductCreateRequest $request);

    /**
     * Method <code>getList</code>
     *
     * @param \App\Grpc\Mall\ProductSrv\ProductListRequest $request
     * @return \App\Grpc\Mall\ProductSrv\ProductListReply
     */
    public function getList(\App\Grpc\Mall\ProductSrv\ProductListRequest $request);

    /**
     * Method <code>getStock</code>
     *
     * @param \App\Grpc\Mall\ProductSrv\ProductId $request
     * @return \App\Grpc\Mall\ProductSrv\ProductStockReply
     */
    public function getStock(\App\Grpc\Mall\ProductSrv\ProductId $request);

    /**
     * Method <code>incStock</code>
     *
     * @param \App\Grpc\Mall\ProductSrv\ProductStockRequest $request
     * @return \App\Grpc\Mall\ProductSrv\ProductStockReply
     */
    public function incStock(\App\Grpc\Mall\ProductSrv\ProductStockRequest $request);

    /**
     * Method <code>decStock</code>
     *
     * @param \App\Grpc\Mall\ProductSrv\ProductStockRequest $request
     * @return \App\Grpc\Mall\ProductSrv\ProductStockReply
     */
    public function decStock(\App\Grpc\Mall\ProductSrv\ProductStockRequest $request);

}

