<?php

namespace Akeneo\Bundle\MeasureBundle\Family;

/**
 * Intensity measures constants
 *
 * @author Emmanuel Valette <evalette@expertime.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license http://opensource.org/licenses/MIT MIT
 */
interface IntensityFamilyInterface
{
    /**
     * Family measure name
     * @staticvar string
     */
    public const FAMILY = 'Intensity';
    
    /**
     * @staticvar string
     */
    public const MILLIAMPERE = 'MILLIAMPERE';
    
    /**
     * @staticvar string
     */
    public const CENTIAMPERE = 'CENTIAMPERE';
    
    /**
     * @staticvar string
     */
    public const DECIAMPERE = 'DECIAMPERE';
    
    /**
     * @staticvar string
     */
    public const AMPERE = 'AMPERE';
    
    /**
     * @staticvar string
     */
    public const DEKAMPERE = 'DEKAMPERE';
    
    /**
     * @staticvar string
     */
    public const HECTOAMPERE = 'HECTOAMPERE';
    
    /**
     * @staticvar string
     */
    public const KILOAMPERE = 'KILOAMPERE';
}
