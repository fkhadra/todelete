<?php

namespace Gugu;

use Composer\Script\Event;


Class Test
{
    public static function Test()
    {
        echo "ocouou";
    }

    public static function postPackageInstall(Event $event)
    {
        $io = $event->getIO();
        var_dump($event->getComposer()->getPackage()->);

//        if ($io->askConfirmation("Are you sure you want to proceed? ", false)) {
//            // ok, continue on to composer install
//            return true;
//        }
        // exit composer and terminate installation process
        exit;
    }
}