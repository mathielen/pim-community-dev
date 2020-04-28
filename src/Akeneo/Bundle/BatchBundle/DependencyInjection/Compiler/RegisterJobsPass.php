<?php

namespace Akeneo\Bundle\BatchBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Compiler pass to register tagged jobs to the registry
 *
 * @author    Gildas Quemener <gildas.quemener@gmail.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
class RegisterJobsPass implements CompilerPassInterface
{
    /** @staticvar string The registry id */
    public const REGISTRY_ID = 'akeneo_batch.job.job_registry';

    /** @staticvar string */
    public const SERVICE_TAG = 'akeneo_batch.job';

    /** @staticvar string */
    public const DEFAULT_CONNECTOR = 'default';

    /** @staticvar string */
    public const DEFAULT_JOB_TYPE = 'default';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition(self::REGISTRY_ID)) {
            return;
        }

        $registryDefinition = $container->getDefinition(self::REGISTRY_ID);
        foreach ($container->findTaggedServiceIds(self::SERVICE_TAG) as $serviceId => $tags) {
            foreach ($tags as $tag) {
                $connector = $tag['connector'] ?? self::DEFAULT_CONNECTOR;
                $type = $tag['type'] ?? self::DEFAULT_JOB_TYPE;
                $job = new Reference($serviceId);
                $registryDefinition->addMethodCall('register', [$job, $type, $connector]);
            }
        }
    }
}
