<?php

namespace Uuid62;

use InvalidArgumentException;

/**
 * This file is part of the Uuid62 package.
 *
 * (c) Lucas Michot [lucas@semalead.com]
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Uuid62
{

    /**
     * Get a unique Base62 ID from a value
     *
     * @param bool $pad
     * @param mixed $value
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public static function get($value, $pad = false)
    {
        // checks that $value is set
        if ($value === null) {
            throw new InvalidArgumentException('Value cannot be null');
        }

        // if the value is an array or an object, serialize it
        if (is_array($value) or is_object($value)) {
            $value = serialize($value);
        }

        // get the MD5
        $md5 = md5($value);

        // convert this MD5 to a decimal number
        $value = base_convert($md5, 16, 10);

        // initialize alphabet for base 62 conversion
        $alphabet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // convert to base 62
        $base62 = null;
        do {
            $base62 = substr($alphabet, $value % 62, 1) . $base62;
            $value = floor($value / 62);
        } while ($value >= 1);

        // left-pad with 0
        if ($pad) {
            $base62 = str_pad($base62, 22 - strlen($base62), '0', STR_PAD_LEFT);
        }

        // get unique base 62 UUID
        return $base62;
    }
}
