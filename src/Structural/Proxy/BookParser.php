<?php namespace UKCASmith\DesignPatterns\Structural\Proxy;

use UKCASmith\DesignPatterns\Structural\Proxy\Contracts\Parser;

class BookParser implements Parser
{

    protected $author;
    protected $title;
    protected $words;

    /**
     * BookParser constructor.
     *
     * @param array $book
     */
    public function __construct(array $book)
    {
        $this->title = $book['title'];
        $this->author = $book['author'];
        $this->words = $this->slowParseWordsMethod($book['words']);
    }

    /**
     * Get the book author.
     *
     * @return mixed
     */
    public function getBookAuthor()
    {
        return $this->author;
    }

    /**
     * Get the book title.
     *
     * @return mixed
     */
    public function getBookTitle()
    {
        return $this->title;
    }

    /**
     * Get total number of words.
     *
     * @return mixed
     */
    public function getTotalWords()
    {
        return $this->words;
    }

    /**
     * Parse book to get total number of words.
     *
     * Note: THIS IS SLOW!.
     *
     * @param $bookContent
     * @return mixed
     */
    protected function slowParseWordsMethod($bookContent)
    {
        return str_word_count($bookContent);
    }
}