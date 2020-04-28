<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Amperage family
 *
 * @author    Antoine Guigan <antoine@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface ElectricChargeFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'ElectricCharge';
    
    /**
     * @staticvar string
     */
    public const AMPEREHOUR = 'AMPEREHOUR';

    /**
     * @staticvar string
     */
    public const MILLIAMPEREHOUR = 'MILLIAMPEREHOUR';

    /**
     * @staticvar string
     */
    public const MILLICOULOMB = 'MILLICOULOMB';

    /**
     * @staticvar string
     */
    public const CENTICOULOMB = 'CENTICOULOMB';

    /**
     * @staticvar string
     */
    public const DECICOULOMB = 'DECICOULOMB';

    /**
     * @staticvar string
     */
    public const COULOMB = 'COULOMB';

    /**
     * @staticvar string
     */
    public const DEKACOULOMB = 'DEKACOULOMB';

    /**
     * @staticvar string
     */
    public const HECTOCOULOMB = 'HECTOCOULOMB';

    /**
     * @staticvar string
     */
    public const KILOCOULOMB = 'KILOCOULOMB';

    /**
     * @staticvar string
     */
    public const MEGACOULOMB = 'MEGACOULOMB';
}
