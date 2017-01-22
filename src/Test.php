<?php

namespace Gugu;

use Composer\Installer\PackageEvent;

Class Test
{
    public static function Test()
    {
        echo dirname(__DIR__);
    }

    public static function postPackageInstall(PackageEvent $event)
    {
        echo "hook";
    }
}