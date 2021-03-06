<?php
declare(strict_types = 1);

namespace Innmind\Specification\Not;

use Innmind\Specification\{
    Not,
    Specification,
    Composable,
};

/**
 * @psalm-immutable
 */
class Implementation implements Not
{
    use Composable;

    private Specification $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function specification(): Specification
    {
        return $this->specification;
    }
}
