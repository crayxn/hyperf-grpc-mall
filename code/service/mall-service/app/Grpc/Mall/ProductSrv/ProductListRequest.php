<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product_srv.proto

namespace App\Grpc\Mall\ProductSrv;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mall.ProductListRequest</code>
 */
class ProductListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     */
    protected $pageSize = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page
     *     @type int $pageSize
     * }
     */
    public function __construct($data = NULL) {
        \App\Grpc\GPBMetadata\ProductSrv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->pageSize = $var;

        return $this;
    }

}
