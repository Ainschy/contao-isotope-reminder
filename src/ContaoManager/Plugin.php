<?php

/**
 * @copyright Oliver Willmes 2018
 * @author    Oliver Willmes <info@oliverwillmes.de>
 * @package   Reminder - Contao Isotope
 * @license   LGPL
 * @see       https://github.com/Ainschy/contao-isotope-reminder
 */

namespace Willmes\IsotopeReminderBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Oliver Willmes
 */
class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Willmes\IsotopeReminderBundle\WillmesIsotopeReminderBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['Reminder']),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../Resources/config/routing.yml')
            ->load(__DIR__.'/../Resources/config/routing.yml');
    }
}