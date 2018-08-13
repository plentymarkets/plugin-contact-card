<?php

namespace ContactCard\Providers;


use Plenty\Plugin\ServiceProvider;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;

class ContactCardServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */

	public function register() {}

	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            // The script is imported in the Footer.twig of Ceres
            $container->addScriptTemplate('ContactCard::script.ContactScript');
        }, 0);
    }
}