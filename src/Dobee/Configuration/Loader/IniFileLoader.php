<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/1/30
 * Time: 下午10:15
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Dobee\Configuration\Loader;

use Dobee\Configuration\ConfigurationFileNotFoundException;
use Dobee\Configuration\LoaderAbstract;

class IniFileLoader extends LoaderAbstract
{
    public function parser($resource = null)
    {
        return parse_ini_file($resource, true);
    }
}