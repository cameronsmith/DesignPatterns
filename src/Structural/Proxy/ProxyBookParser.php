<?php namespace UKCASmith\DesignPatterns\Structural\Proxy;

use UKCASmith\DesignPatterns\Structural\Proxy\Contracts\Parser;

class ProxyBookParser implements Parser
{

    protected $author;
    protected $title;
    protected $wordsContent;
    protected $bookParserInstance = false;

    /**
     * BookParser constructor.
     *
     * @param array $book
     */
    public function __construct(array $book)
    {
        $this->title = $book['title'];
        $this->author = $book['author'];
        $this->wordsContent = $book['words'];
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
        if (!$this->bookParserInstance) {
            $this->bookParserInstance = new BookParser([
                'title' => $this->title,
                'author' => $this->author,
                'words' => $this->wordsContent,
            ]);
        }

        return $this->bookParserInstance->getTotalWords();
    }
}