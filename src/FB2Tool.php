<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\Fb2tool;

use Inkoder\Fb2tool\Helpers\XmlHelper;
use Inkoder\Fb2tool\Models\Book;

class FB2Tool
{
    /**
     * @var
     */
    private $bookXml;
    private $book;

    public function __construct($file = '')
    {
        try {
            $this->setBookXml(XmlHelper::load($file));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getBookXml()
    {
        return $this->bookXml;
    }

    /**
     * @param mixed $bookXml
     *
     * @throws \Exception
     */
    public function setBookXml($bookXml): void
    {
        if ($bookXml instanceof \SimpleXMLElement) {
            $this->bookXml = $bookXml;
        } else {
            throw new \Exception('Error getting book xml');
        }
    }

    public function parse() {

        $this->book = new Book();

    }


}