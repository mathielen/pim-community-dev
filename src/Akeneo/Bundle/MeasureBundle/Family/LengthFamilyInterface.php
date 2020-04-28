<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Length measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface LengthFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Length';

    /**
     * @staticvar string
     */
    public const CENTIMETER = 'CENTIMETER';

    /**
     * @staticvar string
     */
    public const CHAIN = 'CHAIN';

    /**
     * @staticvar string
     */
    public const DECIMETER = 'DECIMETER';

    /**
     * @staticvar string
     */
    public const DEKAMETER = 'DEKAMETER';

    /**
     * @staticvar string
     */
    public const FEET = 'FEET';

    /**
     * @staticvar string
     */
    public const FURLONG = 'FURLONG';

    /**
     * @staticvar string
     */
    public const HECTOMETER = 'HECTOMETER';

    /**
     * @staticvar string
     */
    public const INCH = 'INCH';

    /**
     * @staticvar string
     */
    public const KILOMETER = 'KILOMETER';

    /**
     * @staticvar string
     */
    public const METER = 'METER';

    /**
     * @staticvar string
     */
    public const MIL = 'MIL';

    /**
     * @staticvar string
     */
    public const MILE = 'MILE';

    /**
     * @staticvar string
     */
    public const MILLIMETER = 'MILLIMETER';

    /**
     * @staticvar string
     */
    public const YARD = 'YARD';
}
