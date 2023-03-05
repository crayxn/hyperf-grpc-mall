<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product_srv.proto

namespace App\Grpc\Mall\ProductSrv;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mall.ProductStockRequest</code>
 */
class ProductStockRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int32 stock = 2;</code>
     */
    protected $stock = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $stock
     * }
     */
    public function __construct($data = NULL) {
        \App\Grpc\GPBMetadata\ProductSrv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stock = 2;</code>
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Generated from protobuf field <code>int32 stock = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStock($var)
    {
        GPBUtil::checkInt32($var);
        $this->stock = $var;

        return $this;
    }

}

