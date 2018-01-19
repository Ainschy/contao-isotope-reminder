<?php

/**
 * @copyright Oliver Willmes 2018
 * @author    Oliver Willmes <info@oliverwillmes.de>
 * @package   Reminder - Contao Isotope
 * @license   LGPL
 * @see       https://github.com/Ainschy/contao-isotope-reminder
 */

namespace Willmes\IsotopeReminder\Controller;

use Willmes\IsotopeReminder\Reminder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Handles the Cronjob frontend routes.
 *
 * @copyright Oliver Willmes 2018
 * @author Oliver Willmes <info@oliverwillmes.de>
 *
 * @Route("/Reminder", defaults={"_scope" = "frontend", "_token_check" = false})
 */
class IsotopeReminderController extends Controller
{
    /**
     * Renders the alerts content.
     *
     * @return Response
     *
     * @Route("/startreminder", name="reminder_autoreminder")
     */
    public function ReminderAction()
    {
        $this->container->get('contao.framework')->initialize();
        $controller = new \Willmes\IsotopeReminder\Reminder();
        return $controller->run();
    }
}