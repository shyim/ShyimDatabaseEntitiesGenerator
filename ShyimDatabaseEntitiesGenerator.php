<?php

namespace ShyimDatabaseEntitiesGenerator;

use Shopware\Components\Console\Application;
use Shopware\Components\Plugin;
use Shyim\DatabaseEntitiesBuilder\Command\GenerateModelCommand;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Class ShyimDatabaseStructGenerator
 * @author Soner Sayakci <shyim@posteo.de>
 */
class ShyimDatabaseEntitiesGenerator extends Plugin
{
    /**
     * This is required due shopware ContainerAwareInterface is not compatible with symfony one
     * @param Application $application
     * @author Soner Sayakci <shyim@posteo.de>
     */
    public function registerCommands(Application $application)
    {
        $command = new GenerateModelCommand();
        $command->setContainer($this->container);
        $application->add($command);
    }
}