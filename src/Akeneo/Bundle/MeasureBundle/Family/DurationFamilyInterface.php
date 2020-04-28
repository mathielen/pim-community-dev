<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Duration constants
 *
 * @author    Antoine Guigan <antoine@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface DurationFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Duration';
    
    /**
     * @staticvar string
     */
    public const MILLISECOND = 'MILLISECOND';

    /**
     * @staticvar string
     */
    public const SECOND = 'SECOND';

    /**
     * @staticvar string
     */
    public const MINUTE = 'MINUTE';

    /**
     * @staticvar string
     */
    public const HOUR = 'HOUR';

    /**
     * @staticvar string
     */
    public const DAY = 'DAY';

    /**
     * @staticvar string
     */
    public const WEEK = 'WEEK';

    /**
     * @staticvar string
     */
    public const MONTH = 'MONTH';

    /**
     * @staticvar string
     */
    public const YEAR = 'YEAR';
}
