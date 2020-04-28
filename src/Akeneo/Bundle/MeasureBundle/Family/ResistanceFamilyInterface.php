<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Resistence family constants
 *
 * @author    Antoine Guigan <antoine@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface ResistanceFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Resistance';
    
    /**
     * @staticvar string
     */
    public const MILLIOHM = 'MILLIOHM';

    /**
     * @staticvar string
     */
    public const CENTIOHM = 'CENTIOHM';

    /**
     * @staticvar string
     */
    public const DECIOHM = 'DECIOHM';

    /**
     * @staticvar string
     */
    public const OHM = 'OHM';

    /**
     * @staticvar string
     */
    public const DEKAOHM = 'DEKAOHM';

    /**
     * @staticvar string
     */
    public const HECTOHM = 'HECTOHM';

    /**
     * @staticvar string
     */
    public const KILOHM = 'KILOHM';

    /**
     * @staticvar string
     */
    public const MEGOHM = 'MEGOHM';
}
