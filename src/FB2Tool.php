<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 03.05.2022
 */

namespace Inkoder\Fb2tool;

use Inkoder\Fb2tool\Helpers\XmlHelper;
use Inkoder\Fb2tool\Models\AuthorType;
use Inkoder\Fb2tool\Models\Book;
use Inkoder\Fb2tool\Models\BookInfo;

class FB2Tool
{
    /**
     * @var
     */
    private $bookXml;

    /**
     * @var Book
     */
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

    /**
     * @return void
     */
    public function parse() {

        $this->book = new Book();
        $bookInfo = new BookInfo();

        $bookInfo->title = $this->getTitle();
        $bookInfo->annotation = $this->getAnnotation();
        $bookInfo->keyword = $this->getKeywords();
        $bookInfo->humanDate = $this->getHumanDate();
        $bookInfo->lang = $this->getLang();
        $bookInfo->srcLang = $this->getSrcLang();
        $bookInfo->id = $this->getId();
        $bookInfo->setAuthor($this->parseAuthor());
        $bookInfo->setTranslator($this->parseTranslator());
        $bookInfo->setDocumentDate($this->getDocumentDate());

        $bookInfo->setCoverPage($this->getCoverPage());

        $this->book->setBookInfo($bookInfo);

    }

    private function getTitle() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'book-title'};
    }

    private function getAnnotation() {
        return $this->getBookXml()->description->{'title-info'}->{'annotation'}->children()->asXml();
    }

    private function getKeywords() {
        $keywords = explode(',',(string) $this->getBookXml()->description->{'title-info'}->{'keywords'});
        sort($keywords, SORT_STRING);
        return $keywords;
    }

    private function parseAuthor() {
        $author = new AuthorType();

        $author->setFirstName((string) $this->getBookXml()->description->{'title-info'}->author->{'first-name'});
        $author->setMiddleName((string) $this->getBookXml()->description->{'title-info'}->author->{'middle-name'});
        $author->setLastName((string) $this->getBookXml()->description->{'title-info'}->author->{'last-name'});
        $author->setNickName((string) $this->getBookXml()->description->{'title-info'}->author->{'nickname'});
        $author->setHomePage((string) $this->getBookXml()->description->{'title-info'}->author->{'home-page'});
        $author->setEmail((string) $this->getBookXml()->description->{'title-info'}->author->{'email'});
        $author->setId((string) $this->getBookXml()->description->{'title-info'}->author->{'id'});
        if ($author->getLastName() || $author->getFirstName()) {
            $author->setFullName(trim($author->getLastName() . ' ' . $author->getFirstName() . ' ' .
            $author->getMiddleName() . ($author->getNickName() ? ' (' . $author->getNickName() . ')' : '')));
        } elseif ($author->getNickName()) {
            $author->setFullName($author->getNickName());
        }

        return $author;
    }

    private function parseTranslator() {
        $translator = new AuthorType();

        $translator->setFirstName((string) $this->getBookXml()->description->{'title-info'}->translator->{'first-name'});
        $translator->setMiddleName((string) $this->getBookXml()->description->{'title-info'}->translator->{'middle-name'});
        $translator->setLastName((string) $this->getBookXml()->description->{'title-info'}->translator->{'last-name'});
        $translator->setNickName((string) $this->getBookXml()->description->{'title-info'}->translator->{'nickname'});
        $translator->setHomePage((string) $this->getBookXml()->description->{'title-info'}->translator->{'home-page'});
        $translator->setEmail((string) $this->getBookXml()->description->{'title-info'}->translator->{'email'});
        $translator->setId((string) $this->getBookXml()->description->{'title-info'}->translator->{'id'});
        if ($translator->getLastName() || $translator->getFirstName()) {
            $translator->setFullName(trim($translator->getLastName() . ' ' . $translator->getFirstName() . ' ' .
                $translator->getMiddleName() . ($translator->getNickName() ? ' (' . $translator->getNickName() . ')' : '')));
        } elseif ($translator->getNickName()) {
            $translator->setFullName($translator->getNickName());
        }

        return $translator;
    }

    private function getHumanDate() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'date'};
    }

    private function getDocumentDate() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'date'}[0]['value'];
    }

    /**
     * @TODO INKODER Произвести рефакторинг метода. Сохранить объект GD2?
     * @return string
     */
    private function getCoverPage() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'coverpage'}->image;
    }

    private function getLang() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'lang'};
    }

    private function getSrcLang() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'src-lang'};
    }

    private function getId() {
        return (string) $this->getBookXml()->description->{'title-info'}->{'id'};
    }
}