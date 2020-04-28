<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Power measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface PowerFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Power';

    /**
     * @staticvar string
     */
    public const GIGAWATT = 'GIGAWATT';

    /**
     * @staticvar string
     */
    public const KILOWATT = 'KILOWATT';

    /**
     * @staticvar string
     */
    public const MEGAWATT = 'MEGAWATT';

    /**
     * @staticvar string
     */
    public const TERAWATT = 'TERAWATT';

    /**
     * @staticvar string
     */
    public const WATT = 'WATT';
}
