<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\Fb2tool\Helpers;

class XmlHelper
{

    static  public function load($file)
    {
        try {
            return simplexml_load_file($file);
        } catch (\Exception $e) {
            return null;
        }
    }

}