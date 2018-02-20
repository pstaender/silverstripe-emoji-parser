<?php

namespace pstaender\Utils;

use SilverStripe\Core\Config\Configurable;

class Emojis {

  use Configurable;

  private static $emojis = [];
  private static $css_class = 'emoji';


  public static function getEmojis() {
    $emojis = self::config()->get('emojis');
    if(empty($emojis)) {
      $path = BASE_PATH . '/resources/pstaender/silverstripe-emoji-parser/graphics/emojis';
      if(file_exists($path) && is_dir($path)) {
        foreach (scandir($path) as $file){
          if(!in_array($file, ['.', '..'])){
            $emojis[] = str_replace('.png', '', $file);
          }
        }
      }
      self::config()->update('emojis', $emojis);
    }
    return $emojis;
  }

  public static function parse($xml) {
    $emojis = self::getEmojis();
    $css = self::config()->get('css_class');
    $basePath = self::base_path();
    foreach ($emojis as $emoji) {
      $xml = str_replace(':'.$emoji.':',
          '<img src="'.$basePath.$emoji.'.png" alt="'.$emoji.'" title="'.$emoji.'" class="'.$css.'" />',
          $xml);
    }
    return $xml;
  }

  public static function base_path()
  {
    return '/resources/pstaender/silverstripe-emoji-parser/graphics/emojis/';
  }

}
