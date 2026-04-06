<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
interface Composite extends Specification
{
    #[\NoDiscard]
    public function left(): Specification;
    #[\NoDiscard]
    public function right(): Specification;
    #[\NoDiscard]
    public function operator(): Operator;
}
