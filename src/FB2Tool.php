<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\Fb2tool;

use Inkoder\Fb2tool\Helpers\XmlHelper;

class FB2Tool
{

    public function __construct($file = '')
    {
        return XmlHelper::load($file);
    }



}