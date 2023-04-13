<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Proto/rpc.proto

namespace Etcd\Compare;

use UnexpectedValueException;

/**
 * Protobuf type <code>etcdserverpb.Compare.CompareTarget</code>
 */
class CompareTarget
{
    /**
     * Generated from protobuf enum <code>VERSION = 0;</code>
     */
    const VERSION = 0;
    /**
     * Generated from protobuf enum <code>CREATE = 1;</code>
     */
    const CREATE = 1;
    /**
     * Generated from protobuf enum <code>MOD = 2;</code>
     */
    const MOD = 2;
    /**
     * Generated from protobuf enum <code>VALUE = 3;</code>
     */
    const VALUE = 3;

    private static $valueToName = [
        self::VERSION => 'VERSION',
        self::CREATE => 'CREATE',
        self::MOD => 'MOD',
        self::VALUE => 'VALUE',
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
class_alias(CompareTarget::class, \Etcd\Compare_CompareTarget::class);
