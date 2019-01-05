<?php
declare(strict_types = 1);

namespace Tests\Innmind\Specification;

use Innmind\Specification\Operator;
use PHPUnit\Framework\TestCase;

class OperatorTest extends TestCase
{
    public function testAnd()
    {
        $this->assertInstanceOf(Operator::class, Operator::and());
        $this->assertSame('AND', (string) Operator::and());
        $this->assertTrue(Operator::and()->equals(Operator::and()));
    }

    public function testOr()
    {
        $this->assertInstanceOf(Operator::class, Operator::or());
        $this->assertSame('OR', (string) Operator::or());
        $this->assertTrue(Operator::or()->equals(Operator::or()));
    }
}
