<?php


namespace ishop;


class Registy
{
    use TSingletone;

    protected static  $properties = [];

    public function setProperty($name, $value) {
        self::$properties[$name] = $value;
    }

    public function getPropety($name) {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties() {
        return self::$properties;
    }


}