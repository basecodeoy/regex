<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\RegEx\Concerns;

trait CanTest
{
    public function test(string $string): bool
    {
        return (bool) \preg_match($this->toRegExp(), $string);
    }
}
