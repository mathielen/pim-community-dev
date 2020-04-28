<?php

namespace Oro\Bundle\FilterBundle\Filter;

class FilterUtility
{
    public const CONDITION_OR = 'OR';
    public const CONDITION_AND = 'AND';

    public const CONDITION_KEY = 'filter_condition';
    public const BY_HAVING_KEY = 'filter_by_having';
    public const ENABLED_KEY = 'enabled';
    public const TYPE_KEY = 'type';
    public const FRONTEND_TYPE_KEY = 'ftype';
    public const DATA_NAME_KEY = 'data_name';
    public const FORM_OPTIONS_KEY = 'options';

    public function getParamMap()
    {
        return [self::FRONTEND_TYPE_KEY => self::TYPE_KEY];
    }

    public function getExcludeParams()
    {
        return [self::DATA_NAME_KEY, self::FORM_OPTIONS_KEY];
    }
}
