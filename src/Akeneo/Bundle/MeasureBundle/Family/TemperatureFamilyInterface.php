<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Temperature measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface TemperatureFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Temperature';

    /**
     * @staticvar string
     */
    public const CELSIUS = 'CELSIUS';

    /**
     * @staticvar string
     */
    public const FAHRENHEIT = 'FAHRENHEIT';

    /**
     * @staticvar string
     */
    public const KELVIN = 'KELVIN';

    /**
     * @staticvar string
     */
    public const RANKINE = 'RANKINE';

    /**
     * @staticvar string
     */
    public const REAUMUR = 'REAUMUR';
}
