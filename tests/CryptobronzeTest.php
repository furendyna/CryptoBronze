<?php
/**
 * Tests for CryptoBronze
 */

use PHPUnit\Framework\TestCase;
use Cryptobronze\Cryptobronze;

class CryptobronzeTest extends TestCase {
    private Cryptobronze $instance;

    protected function setUp(): void {
        $this->instance = new Cryptobronze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptobronze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
