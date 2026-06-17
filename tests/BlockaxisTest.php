<?php
/**
 * Tests for BlockAxis
 */

use PHPUnit\Framework\TestCase;
use Blockaxis\Blockaxis;

class BlockaxisTest extends TestCase {
    private Blockaxis $instance;

    protected function setUp(): void {
        $this->instance = new Blockaxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockaxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
