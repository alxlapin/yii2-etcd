<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Proto/rpc.proto

namespace Etcd;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.LeaseCreateRequest</code>
 */
class LeaseCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * advisory ttl in seconds
     *
     * Generated from protobuf field <code>int64 TTL = 1;</code>
     */
    protected $TTL = 0;
    /**
     * requested ID to create; 0 lets lessor choose
     *
     * Generated from protobuf field <code>int64 ID = 2;</code>
     */
    protected $ID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $TTL
     *           advisory ttl in seconds
     *     @type int|string $ID
     *           requested ID to create; 0 lets lessor choose
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * advisory ttl in seconds
     *
     * Generated from protobuf field <code>int64 TTL = 1;</code>
     * @return int|string
     */
    public function getTTL()
    {
        return $this->TTL;
    }

    /**
     * advisory ttl in seconds
     *
     * Generated from protobuf field <code>int64 TTL = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTTL($var)
    {
        GPBUtil::checkInt64($var);
        $this->TTL = $var;

        return $this;
    }

    /**
     * requested ID to create; 0 lets lessor choose
     *
     * Generated from protobuf field <code>int64 ID = 2;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * requested ID to create; 0 lets lessor choose
     *
     * Generated from protobuf field <code>int64 ID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;

        return $this;
    }

}
