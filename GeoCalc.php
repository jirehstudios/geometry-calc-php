<?php

class GeoCalc
{
    public static function sqPerim($a)
    {
        return 4 * $a;
    }

    public static function rectPerim($l, $b)
    {
        return 2 * ($l + $b);
    }

    public static function circum($r)
    {
        return 2 * pi() * $r;
    }

    public static function sqArea($a)
    {
        return $a ** 2;
    }

    public static function rectArea($l, $b)
    {
        return $l * $b;
    }

    public static function triArea($b, $h)
    {
        return ($b * $h) / 2;
    }

    public static function trapArea($b1, $b2, $h)
    {
        return (($b1 + $b2) * $h) / 2;
    }

    public static function circArea($r)
    {
        return pi() * ($r ** 2);
    }

    public static function cubeSurfArea($a)
    {
        return 6 * ($a ** 2);
    }

    public static function cylSurfArea($r, $h)
    {
        return 2 * pi() * $r * $h;
    }

    public static function coneSurfArea($r, $l)
    {
        return pi() * $r * $l;
    }

    public static function sphereSurfArea($r)
    {
        return 4 * pi() * ($r ** 2);
    }

    public static function cylVol($b, $h)
    {
        return $b * $h;
    }

    public static function coneVol($b, $h)
    {
        return ($b * $h) / 3;
    }

    public static function sphereVol($r)
    {
        return 4 * pi() * (($r ** 3) / 3);
    }
}
