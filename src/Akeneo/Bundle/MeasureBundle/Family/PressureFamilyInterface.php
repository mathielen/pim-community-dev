<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Pressure measures constants
 *
 * @author    Grégory Planchat <gregory@luni.fr>
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface PressureFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Pressure';

    /**
     * @staticvar string
     */
    public const PASCAL = 'PASCAL';

    /**
     * @staticvar string
     */
    public const HECTOPASCAL = 'HECTOPASCAL';

    /**
     * @staticvar string
     */
    public const MMHG = 'MMHG';

    /**
     * @staticvar string
     */
    public const ATM = 'ATM';

    /**
     * @staticvar string
     */
    public const BAR = 'BAR';

    /**
     * @staticvar string
     */
    public const MILLIBAR = 'MILLIBAR';

    /**
     * @staticvar string
     */
    public const TORR = 'TORR';
}
