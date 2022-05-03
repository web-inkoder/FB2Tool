<?php
/**
 * Created by PhpStorm.
 * For: FB2-Parser
 * User: Sergey Akulov (https://github.com/web-inkoder)
 * Date: 02.05.2022
 */

namespace Inkoder\FB2\Model;

/**
 * Class AuthorType
 *
 * @package inkoder\FB2\Model
 */
class AuthorType implements IModel
{

    /**
     * @var string
     */
    private $firstName = '';
    /**
     * @var string
     */
    private $middleName = '';
    /**
     * @var string
     */
    private $lastName = '';
    /**
     * @var string
     */
    private $fullName = '';
    /**
     * @var string
     */
    private $nickName = '';
    /**
     * @var string
     */
    private $email = '';
    /**
     * @var string
     */
    private $homePage = '';
    /**
     * @var int
     */
    private $id = null;


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $value
     */
    public function setEmail(string $value): void
    {
        $this->email = $value;
    }


    /**
     * @return string
     */
    public function getNickName(): string
    {
        return $this->nickName;
    }

    /**
     * @param string $value
     */
    public function setNickName(string $value): void
    {
        $this->nickName = $value;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $value
     */
    public function setMiddleName(string $value): void
    {
        $this->middleName = $value;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $value
     */
    public function setFirstName(string $value): void
    {
        $this->firstName = $value;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $value
     */
    public function setLastName(string $value): void
    {
        $this->lastName = $value;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $value
     */
    public function setFullName(string $value): void
    {
        $this->fullName = $value;
    }

    /**
     * @return string
     */
    public function getHomePage(): string
    {
        return $this->homePage;
    }

    /**
     * @param string $homePage
     */
    public function setHomePage(string $homePage): void
    {
        $this->homePage = $homePage;
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
}
