<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 04.05.2022
 */

namespace Inkoder\Fb2tool\Models;

class Book implements IModel
{
    /**
     * @var BookInfo
     */
    private $bookInfo;

    /**
     * @var DocumentInfo
     */
    private $documentInfo;

    /**
     * @var PublishInfo
     */
    private $publishInfo;

    /**
     * @var CustomInfo
     */
    private $customInfo;

    private $body;


}