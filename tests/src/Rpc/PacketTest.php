<?php

namespace Jtl\Connector\Core\Test\Rpc;

use Faker\Provider\Uuid;
use Jtl\Connector\Core\Rpc\Packet;
use Jtl\Connector\Core\Test\TestCase;

/**
 * Class PacketTest
 * @package Jtl\Connector\Core\Test\Rpc
 */
class PacketTest extends TestCase
{
    /**
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function testToArray()
    {
        $jtlRpc = \random_int(0, 1) === 1 ? Uuid::uuid() : '';
        $id     = \random_int(0, 1) === 1 ? Uuid::uuid() : '';
        $packet = $this->stubPacket()->setJtlrpc($jtlRpc)->setId($id);
        $result = $this->invokeMethodFromObject($packet, 'toArray');
        $this->assertSame(['jtlrpc' => $jtlRpc, 'id' => $id], $result);
    }

    /**
     * @return Packet
     */
    protected function stubPacket(): Packet
    {
        return new class extends Packet {
            /**
             * @return boolean
             */
            public function isValid(): bool
            {
                return false;
            }
        };
    }
}
