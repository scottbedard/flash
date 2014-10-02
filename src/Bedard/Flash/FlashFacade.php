<?php namespace Bedard\Flash;

use Illuminate\Support\Facades\Facade;

class FlashFacade extends Facade {
    public static function getFacadeAccessor() { return 'flash';  }
}