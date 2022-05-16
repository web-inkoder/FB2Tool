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

    /**
     * @return BookInfo
     */
    public function getBookInfo(): BookInfo
    {
        return $this->bookInfo;
    }

    /**
     * @param BookInfo $bookInfo
     */
    public function setBookInfo(BookInfo $bookInfo): void
    {
        $this->bookInfo = $bookInfo;
    }

    /**
     * @return DocumentInfo
     */
    public function getDocumentInfo(): DocumentInfo
    {
        return $this->documentInfo;
    }

    /**
     * @param DocumentInfo $documentInfo
     */
    public function setDocumentInfo(DocumentInfo $documentInfo): void
    {
        $this->documentInfo = $documentInfo;
    }

    /**
     * @return PublishInfo
     */
    public function getPublishInfo(): PublishInfo
    {
        return $this->publishInfo;
    }

    /**
     * @param PublishInfo $publishInfo
     */
    public function setPublishInfo(PublishInfo $publishInfo): void
    {
        $this->publishInfo = $publishInfo;
    }

    /**
     * @return CustomInfo
     */
    public function getCustomInfo(): CustomInfo
    {
        return $this->customInfo;
    }

    /**
     * @param CustomInfo $customInfo
     */
    public function setCustomInfo(CustomInfo $customInfo): void
    {
        $this->customInfo = $customInfo;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }




}