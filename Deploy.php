<?php
namespace Jumpstart;

use Composer\Script\Event;

/**
 * Class Deploy
 * @package Jumpstart\Deploy
 */
class Deploy
{
    /**
     * Publish th plugin to the WordPress plugin repository
     * @param Event $event
     */
    public static function publish(Event $event)
    {
        $io = $event->getIO();
        $io->write(array(
            'This will eventually publish your plugin to the  WordPress plugin repository.',
            "Please contact me (mail@moritzkornher.de) if you need this feature immediately."
        ));
    }
}
