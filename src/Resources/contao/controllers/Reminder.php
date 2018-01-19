<?php

/**
 * @copyright  Softleister 2007-2017
 * @author     Softleister <info@softleister.de>
 * @package    BackupDB - Database backup
 * @license    LGPL
 * @see        https://github.com/do-while/contao-BackupDB
 */

namespace Willmes\IsotopeReminder;

use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LogLevel;
use Contao\CoreBundle\Monolog\ContaoContext;


class Reminder extends \Frontend
{
    public function __construct( )
    {
        parent::__construct( );

        if( !defined( 'BE_USER_LOGGED_IN' ) ) {
            define( 'BE_USER_LOGGED_IN', false );
        }
        if( !defined( 'FE_USER_LOGGED_IN' ) ) {
            define( 'FE_USER_LOGGED_IN', false );
        }
    }

    public function run( )
    {
/*
        if( \Config::get('reminder_key') != '' ) {
            if( \Input::get( \Config::get('reminder_key') ) === NULL ) {
                die( 'You cannot access this file directly!' );
            }
        }
*/
        return new Response(
			'<html><body>Here i\'am!</body></html>'
		);
    }
}

