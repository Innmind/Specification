<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Composite extends Specification
{
    public function left(): Specification;
    public function right(): Specification;
    public function operator(): Operator;
}
