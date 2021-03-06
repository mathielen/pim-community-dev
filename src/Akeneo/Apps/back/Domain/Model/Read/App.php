<?php

declare(strict_types=1);

namespace Akeneo\Apps\Domain\Model\Read;

/**
 * @author Romain Monceau <romain@akeneo.com>
 * @copyright 2019 Akeneo SAS (http://www.akeneo.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class App
{
    /** @var string */
    private $code;

    /** @var string */
    private $label;

    /** @var string */
    private $flowType;

    public function __construct(string $code, string $label, string $flowType)
    {
        $this->code = $code;
        $this->label = $label;
        $this->flowType = $flowType;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function flowType(): string
    {
        return $this->flowType;
    }

    public function normalize(): array
    {
        return [
            'code' => $this->code,
            'label' => $this->label,
            'flowType' => $this->flowType
        ];
    }
}
