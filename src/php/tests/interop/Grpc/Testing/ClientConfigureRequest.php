<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configurations for a test client.
 *
 * Generated from protobuf message <code>grpc.testing.ClientConfigureRequest</code>
 */
class ClientConfigureRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The types of RPCs the client sends.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.RpcType types = 1;</code>
     */
    private $types;
    /**
     * The collection of custom metadata to be attached to RPCs sent by the client.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.Metadata metadata = 2;</code>
     */
    private $metadata;
    /**
     * The deadline to use, in seconds, for all RPCs.  If unset or zero, the
     * client will use the default from the command-line.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 3;</code>
     */
    protected $timeout_sec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $types
     *           The types of RPCs the client sends.
     *     @type \Grpc\Testing\ClientConfigureRequest\Metadata[]|\Google\Protobuf\Internal\RepeatedField $metadata
     *           The collection of custom metadata to be attached to RPCs sent by the client.
     *     @type int $timeout_sec
     *           The deadline to use, in seconds, for all RPCs.  If unset or zero, the
     *           client will use the default from the command-line.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * The types of RPCs the client sends.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.RpcType types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * The types of RPCs the client sends.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.RpcType types = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Grpc\Testing\ClientConfigureRequest\RpcType::class);
        $this->types = $arr;

        return $this;
    }

    /**
     * The collection of custom metadata to be attached to RPCs sent by the client.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.Metadata metadata = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The collection of custom metadata to be attached to RPCs sent by the client.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.ClientConfigureRequest.Metadata metadata = 2;</code>
     * @param \Grpc\Testing\ClientConfigureRequest\Metadata[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\Testing\ClientConfigureRequest\Metadata::class);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The deadline to use, in seconds, for all RPCs.  If unset or zero, the
     * client will use the default from the command-line.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 3;</code>
     * @return int
     */
    public function getTimeoutSec()
    {
        return $this->timeout_sec;
    }

    /**
     * The deadline to use, in seconds, for all RPCs.  If unset or zero, the
     * client will use the default from the command-line.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->timeout_sec = $var;

        return $this;
    }

}
