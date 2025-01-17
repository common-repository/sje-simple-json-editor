<?php

class SJE_Icons {

  protected static $icons = array(
    'file-code' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="icon file-code"><rect width="256" height="256" fill="none"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 128 176 152 152 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="104 128 80 152 104 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M200,224a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>',
  );

  public static function get_svg($icon) {
    if (self::icon_exists($icon)) {
      return self::$icons[$icon];
    }
    return '';
  }

  public static function get_all_icons() {
    return self::$icons;
  }

  public static function icon_exists($icon) {
    return array_key_exists($icon, self::$icons);
  }
}