<?php
/**
 * Created by PhpStorm.
 * User: coeus
 * Date: 4/22/16
 * Time: 4:54 PM
 */

namespace TayyabHussain\Submit\Facade;


use Illuminate\Support\Facades\Facade;

class Submit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Submit';
    }
}