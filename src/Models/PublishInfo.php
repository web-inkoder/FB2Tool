<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 09.05.2022
 */

namespace Inkoder\Fb2tool\Models;

/**
 * Information about some paper/outher published document, that was used as a source of this xml document
 */
class PublishInfo implements IModel
{

    private $bookName = '';
    private $publisher = '';
    private $city = '';
    private $year = 0;
    private $isbn = '';
    private $sequenceName = '';
    private $sequenceNumber = null;

    /**
     * @return string
     */
    public function getBookName(): string
    {
        return $this->bookName;
    }

    /**
     * @param string $bookName
     */
    public function setBookName(string $bookName): void
    {
        $this->bookName = $bookName;
    }

    /**
     * @return string
     */
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getSequenceName(): string
    {
        return $this->sequenceName;
    }

    /**
     * @param string $sequenceName
     */
    public function setSequenceName(string $sequenceName): void
    {
        $this->sequenceName = $sequenceName;
    }

    /**
     * @return null
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param null $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }


}