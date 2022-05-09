<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 09.05.2022
 */

namespace Inkoder\Fb2tool\Models;

/**
 * Information about this particular (xml) document
 */
class DocumentInfo implements IModel
{

    /**
     * @var AuthorType
     */
    private $author = null;

    private $programUsed = '';
    private $date = '';
    private $humanDate = '';
    private $srcUrl = '';
    private $srcOCR = '';
    private $id = '';
    private $version = 0.0;
    private $history = '';

    /**
     * @var AuthorType
     */
    private $publisher = null;

    /**
     * @return AuthorType
     */
    public function getAuthor(): ?AuthorType
    {
        return $this->author;
    }

    /**
     * @param AuthorType $author
     */
    public function setAuthor(?AuthorType $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getProgramUsed(): string
    {
        return $this->programUsed;
    }

    /**
     * @param string $programUsed
     */
    public function setProgramUsed(string $programUsed): void
    {
        $this->programUsed = $programUsed;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getHumanDate(): string
    {
        return $this->humanDate;
    }

    /**
     * @param string $humanDate
     */
    public function setHumanDate(string $humanDate): void
    {
        $this->humanDate = $humanDate;
    }

    /**
     * @return string
     */
    public function getSrcUrl(): string
    {
        return $this->srcUrl;
    }

    /**
     * @param string $srcUrl
     */
    public function setSrcUrl(string $srcUrl): void
    {
        $this->srcUrl = $srcUrl;
    }

    /**
     * @return string
     */
    public function getSrcOCR(): string
    {
        return $this->srcOCR;
    }

    /**
     * @param string $srcOCR
     */
    public function setSrcOCR(string $srcOCR): void
    {
        $this->srcOCR = $srcOCR;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getVersion(): float
    {
        return $this->version;
    }

    /**
     * @param float $version
     */
    public function setVersion(float $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getHistory(): string
    {
        return $this->history;
    }

    /**
     * @param string $history
     */
    public function setHistory(string $history): void
    {
        $this->history = $history;
    }

    /**
     * @return AuthorType
     */
    public function getPublisher(): ?AuthorType
    {
        return $this->publisher;
    }

    /**
     * @param AuthorType $publisher
     */
    public function setPublisher(?AuthorType $publisher): void
    {
        $this->publisher = $publisher;
    }




}