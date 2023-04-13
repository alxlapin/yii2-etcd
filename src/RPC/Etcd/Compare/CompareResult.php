<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Proto/rpc.proto

namespace Etcd\Compare;

use UnexpectedValueException;

/**
 * Protobuf type <code>etcdserverpb.Compare.CompareResult</code>
 */
class CompareResult
{
    /**
     * Generated from protobuf enum <code>EQUAL = 0;</code>
     */
    const EQUAL = 0;
    /**
     * Generated from protobuf enum <code>GREATER = 1;</code>
     */
    const GREATER = 1;
    /**
     * Generated from protobuf enum <code>LESS = 2;</code>
     */
    const LESS = 2;

    private static $valueToName = [
        self::EQUAL => 'EQUAL',
        self::GREATER => 'GREATER',
        self::LESS => 'LESS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompareResult::class, \Etcd\Compare_CompareResult::class);
