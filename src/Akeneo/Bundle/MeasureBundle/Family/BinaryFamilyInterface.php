<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Binary measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface BinaryFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Binary';

    /**
     * @staticvar string
     */
    public const BIT = 'BIT';

    /**
     * @staticvar string
     */
    public const BYTE = 'BYTE';

    /**
     * @staticvar string
     */
    public const KILOBYTE = 'KILOBYTE';

    /**
     * @staticvar string
     */
    public const MEGABYTE = 'MEGABYTE';

    /**
     * @staticvar string
     */
    public const GIGABYTE = 'GIGABYTE';

    /**
     * @staticvar string
     */
    public const TERABYTE = 'TERABYTE';
}
