<?php

class Weather
{
  // IMPORTANT: Static Properties
  private static $tempConditions = ['cold', 'mild', 'warm'];

  public static function celciusToFarenheit($c)
  {
    return $c * 9 / 5 + 32;
  }

  public static function determinTempCondition($f)
  {
    if ($f < 40) {
      // NOTE: (self::) to access on our (static properties) direct on this (class)
      return self::$tempConditions[0]; // cold
    } else if ($f < 70) {
      return self::$tempConditions[1]; // mild
    } else {
      return self::$tempConditions[2]; // warm
    }
  }
}

// NOTE: We can access all (properties & methods) direct on the (class) without creating new instance of that (class) by (static properties)
// Weather::$tempConditions;

echo Weather::celciusToFarenheit(20)

?>

<html lang='en'>

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>
