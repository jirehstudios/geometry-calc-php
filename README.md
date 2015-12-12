## Installation

Simply include the file in your PHP code and use it like so:

```
include 'path/to/GeoCalc.php';

echo GeoCalc::sqArea(3); // outputs 9
```

## Available Methods

All methods return the un-rounded value.

```
GeoCalc::sqPerim($a) // Square Perimeter
GeoCalc::rectPerim($l, $b) // Rectangle Perimeter

GeoCalc::circum($r) // Circumference

GeoCalc::sqArea($a) // Square Area
GeoCalc::rectArea($l, $b) // Rectangle Area
GeoCalc::triArea($b, $h) // Triangle Area
GeoCalc::trapArea($b1, $b2, $h) // Trapezoid Area
GeoCalc::circArea($r) // Circle Area

GeoCalc::cubeSurfArea($a) // Cube Surface Area
GeoCalc::cylSurfArea($r, $h) // Cylinder Surface Area
GeoCalc::coneSurfArea($r, $l) // Cone Surface Area
GeoCalc::sphereSurfArea($r) // Sphere Surface Area

GeoCalc::cylVol($b, $h) // Cylinder Volume
GeoCalc::coneVol($b, $h) // Cone Volume
GeoCalc::sphereVol($r) // Sphere Volume
```