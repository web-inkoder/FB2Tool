<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\FB2\Helper;

class XmlHelper
{
    /**
     * @var \SimpleXMLElement|null
     */
   var $xml = null;

    static  public function load($file)
    {
        try {
            self::setXml(simplexml_load_file($file));
            return (self::getXml());
        } catch (\Exception $e) {
            return (null);
        }
    }

    /**
     * @return \SimpleXMLElement|null
     */
    static public function getXml(): ?\SimpleXMLElement
    {
        return self::$xml;
    }

    /**
     * @param \SimpleXMLElement $xml
     */
    public function setXml(\SimpleXMLElement $xml)
    {
        self::$xml = $xml;
    }
}