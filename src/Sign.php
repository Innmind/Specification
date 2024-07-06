<?php
declare(strict_types = 1);

namespace Innmind\Specification;

/**
 * @psalm-immutable
 */
enum Sign
{
    case equality;
    case lessThan;
    case moreThan;
    case startsWith;
    case endsWith;
    case contains;
    case in;
}
