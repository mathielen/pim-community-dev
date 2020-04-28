<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Voltage measures constants
 *
 * @author Emmanuel Valette <evalette@expertime.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license http://opensource.org/licenses/MIT MIT
 */
interface VoltageFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Voltage';

    /**
     * @staticvar string
     */
    public const MILLIVOLT = 'MILLIVOLT';
    
    /**
     * @staticvar string
     */
    public const CENTIVOLT = 'CENTIVOLT';

    /**
     * @staticvar string
     */
    public const DECIVOLT = 'DECIVOLT';

    /**
     * @staticvar string
     */
    public const VOLT = 'VOLT';
    
    /**
     * @staticvar string
     */
    public const DEKAVOLT = 'DEKAVOLT';

    /**
     * @staticvar string
     */
    public const HECTOVOLT = 'HECTOVOLT';

    /**
     * @staticvar string
     */
    public const KILOVOLT = 'KILOVOLT';
}
