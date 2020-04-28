<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Speed measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface SpeedFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Speed';

    /**
     * @staticvar string
     */
    public const FOOT_PER_SECOND = 'FOOT_PER_SECOND';

    /**
     * @staticvar string
     */
    public const FOOT_PER_HOUR = 'FOOT_PER_HOUR';

    /**
     * @staticvar string
     */
    public const KILOMETER_PER_HOUR = 'KILOMETER_PER_HOUR';

    /**
     * @staticvar string
     */
    public const METER_PER_HOUR = 'METER_PER_HOUR';

    /**
     * @staticvar string
     */
    public const METER_PER_MINUTE = 'METER_PER_MINUTE';

    /**
     * @staticvar string
     */
    public const METER_PER_SECOND = 'METER_PER_SECOND';

    /**
     * @staticvar string
     */
    public const MILE_PER_HOUR = 'MILE_PER_HOUR';

    /**
     * @staticvar string
     */
    public const YARD_PER_HOUR = 'YARD_PER_HOUR';
}
