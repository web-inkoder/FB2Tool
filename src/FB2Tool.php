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
    /**
     * @var \SimpleXMLElement|null
     * @todo inkoder не забыть поменять область видимости
     */
    public $xml;

    public function __construct($file = '')
    {
        XmlHelper::load($file);
        $this->xml = XmlHelper::getXml();
    }



}