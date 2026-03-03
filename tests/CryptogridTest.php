<?php
/**
 * Tests for CryptoGrid
 */

use PHPUnit\Framework\TestCase;
use Cryptogrid\Cryptogrid;

class CryptogridTest extends TestCase {
    private Cryptogrid $instance;

    protected function setUp(): void {
        $this->instance = new Cryptogrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptogrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
