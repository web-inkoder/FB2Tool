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

    /**
     * @param $file
     *
     * @return \$1|false|\SimpleXMLElement|null
     */
    static public function load($file)
    {
        try {
            return simplexml_load_file($file);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * @param $data
     * @param $file
     *
     * @return bool
     */
    static public function save($data, $file): bool
    {
        try {
            $f = fopen($file, 'w');
            fputs ($f, $data->asXml());
            fclose ($f);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}