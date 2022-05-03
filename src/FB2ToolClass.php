<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\FB2Tool;

use Inkoder\FB2\Helper\XmlHelper;

class FB2ToolClass
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