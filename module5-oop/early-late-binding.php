<?php
class Planet{
    static function EchoName(){
        echo static::getName();
        // echo self::getName();
    }

    static function getName(){
        return "Planet Name\n";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

// Planet::EchoName();
Earth::EchoName();