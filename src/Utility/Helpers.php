<?php

declare(strict_types=1);

namespace BillingSystem\Invoicer\Utility;

use ReflectionProperty;

final class Helpers
{
    public static function dd(): void
    {
        $args = func_get_args();
        \call_user_func_array('var_dump', $args);
        die();
    }

    public static function isPropertyInitialized(Object $object): bool
    {
        $property = new ReflectionProperty($object, 'total');
        $property->setAccessible(true);

        return $property->isInitialized($object);
    }
}
