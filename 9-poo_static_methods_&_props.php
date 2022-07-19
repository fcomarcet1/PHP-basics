<?php
class Utils
{
    public static string $version = '1.0';

    // Inside of class -> self
    public static function getVersion(): string {
        return self::$version;
    }
}

// Outside of class
$getVersion = Utils::$version;
$getVersion2 = Utils::getVersion();