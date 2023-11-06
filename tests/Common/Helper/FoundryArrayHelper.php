<?php

declare(strict_types=1);

namespace My\RestBundle\Tests\Common\Helper;

use Zenstruck\Foundry\Proxy;

class FoundryArrayHelper
{
    /**
     * @param array<Proxy|object> $items
     *
     * @return array<object>
     */
    public static function convertProxyToObject(array $items): array
    {
        return array_map(fn ($item) => $item instanceof Proxy ? $item->object() : $item, $items);
    }
}
