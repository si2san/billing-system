<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Utility;

use ReflectionProperty;

final class Helpers
{
    public static function dd(mixed $value): void
    {
        die(\var_dump($value));
    }

    public static function isPropertyInitialized(Object $object): bool
    {
        $property = new ReflectionProperty($object, 'total');
        $property->setAccessible(true);

        return $property->isInitialized($object);
    }
}
