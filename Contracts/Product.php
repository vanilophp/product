<?php

declare(strict_types=1);

/**
 * Contains the Product interface.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2017-10-07
 *
 */

namespace Vanilo\Product\Contracts;

interface Product
{
    /**
     * Returns whether the product is active (based on its state)
     */
    public function isActive(): bool;

    /**
     * Returns the title of the product. If no `title` was given, returns the `name` of the product
     */
    public function title(): string;

    public static function findBySku(string $sku): ?Product;
}
