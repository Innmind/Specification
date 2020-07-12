<?php
declare(strict_types = 1);

namespace Tests\Innmind\Specification;

use Innmind\Specification\Sign;
use PHPUnit\Framework\TestCase;

class SignTest extends TestCase
{
    /**
     * @dataProvider possibilities
     */
    public function testInterface($method, $value)
    {
        $this->assertInstanceOf(Sign::class, Sign::$method());
        $this->assertSame($value, (string) Sign::$method());
        $this->assertTrue(Sign::$method()->equals(Sign::$method()));
        $this->assertSame(Sign::$method(), Sign::$method());
    }

    public function possibilities(): array
    {
        return [
            ['equality', '='],
            ['inequality', '<>'],
            ['lessThan', '<'],
            ['moreThan', '>'],
            ['lessThanOrEqual', '<='],
            ['moreThanOrEqual', '>='],
            ['isNull', 'IS NULL'],
            ['isNotNull', 'IS NOT NULL'],
            ['startsWith', 'STARTS WITH'],
            ['endsWith', 'ENDS WITH'],
            ['contains', 'CONTAINS'],
            ['in', 'IN'],
        ];
    }
}
