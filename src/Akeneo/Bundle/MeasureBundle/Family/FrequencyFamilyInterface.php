<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Frequency measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
interface FrequencyFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Frequency';

    /**
     * @staticvar string
     */
    public const GIGAHERTZ = 'GIGAHERTZ';

    /**
     * @staticvar string
     */
    public const KILOHERTZ = 'KILOHERTZ';

    /**
     * @staticvar string
     */
    public const MEGAHERTZ = 'MEGAHERTZ';

    /**
     * @staticvar string
     */
    public const TERAHERTZ = 'TERAHERTZ';

    /**
     * @staticvar string
     */
    public const HERTZ = 'HERTZ';
}
