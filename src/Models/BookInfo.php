<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 04.05.2022
 */

namespace Inkoder\Fb2tool\Models;

use PhpCollection\Set;

/**
 *
 */
class BookInfo implements IModel
{

    /**
     * @var Set
     */
    private $genre = null;

    /**
     * @var AuthorType
     */
    private $author = null;
    public $title = '';
    public $annotation = '';
    public $keyword = [];
    public $humanDate = '';
    private $documentDate = '';
    private $coverPage = '';
    private $lang = '';
    private $srcLang = '';

    /**
     * @var AuthorType
     */
    private $translator = null;
    private $sequenceName = '';
    private $sequenceNumber = null;

    /**
     * @return Set
     */
    public function getGenre(): ?Set
    {
        return $this->genre;
    }

    /**
     * @param Set $genre
     */
    public function setGenre(?Set $genre): void
    {
        $this->genre = $genre;
    }

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
    public function getDocumentDate(): string
    {
        return $this->documentDate;
    }

    /**
     * @param string $documentDate
     */
    public function setDocumentDate(string $documentDate): void
    {
        $this->documentDate = $documentDate;
    }

    /**
     * @return string
     */
    public function getCoverPage(): string
    {
        return $this->coverPage;
    }

    /**
     * @param string $coverPage
     */
    public function setCoverPage(string $coverPage): void
    {
        $this->coverPage = $coverPage;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getSrcLang(): string
    {
        return $this->srcLang;
    }

    /**
     * @param string $srcLang
     */
    public function setSrcLang(string $srcLang): void
    {
        $this->srcLang = $srcLang;
    }

    /**
     * @return AuthorType
     */
    public function getTranslator(): ?AuthorType
    {
        return $this->translator;
    }

    /**
     * @param AuthorType $translator
     */
    public function setTranslator(?AuthorType $translator): void
    {
        $this->translator = $translator;
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