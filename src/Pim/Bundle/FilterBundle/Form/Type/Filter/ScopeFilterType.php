<?php

namespace Pim\Bundle\FilterBundle\Form\Type\Filter;

use Oro\Bundle\FilterBundle\Form\Type\Filter\ChoiceFilterType;
use Pim\Bundle\UserBundle\Context\UserContext;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Overriding of ChoiceFilterType
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ScopeFilterType extends ChoiceFilterType
{
    /** @staticvar string */
    public const NAME = 'pim_type_scope_filter';

    /** @var UserContext */
    protected $userContext;

    /**
     * @param TranslatorInterface $translator
     * @param UserContext         $userContext
     */
    public function __construct(TranslatorInterface $translator, UserContext $userContext)
    {
        parent::__construct($translator);

        $this->userContext = $userContext;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return ChoiceFilterType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $scopeChoices = $this->userContext->getChannelChoicesWithUserChannel();

        $resolver->setDefaults(
            [
                'field_type'    => 'choice',
                'field_options' => ['choices' => $scopeChoices]
            ]
        );
    }
}
