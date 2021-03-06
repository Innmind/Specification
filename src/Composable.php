<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
trait Composable
{
    public function and(Specification $specification): Composite
    {
        return new AndSpecification($this, $specification);
    }

    public function or(Specification $specification): Composite
    {
        return new OrSpecification($this, $specification);
    }

    public function not(): Not
    {
        return new Not\Implementation($this);
    }
}
