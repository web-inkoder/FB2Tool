<?php
/**
 * Created by PhpStorm.
 * For: FB2Tool
 * User: Sergey Akulov (web.inkoder@gmail.com)
 * Date: 04.05.2022
 */

namespace Inkoder\Fb2tool\Models;

/**
 *
 */
class Genre implements IModel
{
    /**
     * @var
     */
    private $genre_code;

    /**
     * @var
     */
    private $genre_name;

    /**
     * @var
     */
    private $genre_match_percentage;

    /**
     * @return mixed
     */
    public function getGenreCode()
    {
        return $this->genre_code;
    }

    /**
     * @param mixed $genre_code
     */
    public function setGenreCode($genre_code): void
    {
        $this->genre_code = $genre_code;
    }

    /**
     * @return mixed
     */
    public function getGenreName()
    {
        return $this->genre_name;
    }

    /**
     * @param mixed $genre_name
     */
    public function setGenreName($genre_name): void
    {
        $this->genre_name = $genre_name;
    }

    /**
     * @return mixed
     */
    public function getGenreMatchPercentage()
    {
        return $this->genre_match_percentage;
    }

    /**
     * @param mixed $genre_match_percentage
     */
    public function setGenreMatchPercentage($genre_match_percentage): void
    {
        $this->genre_match_percentage = $genre_match_percentage;
    }


}