<?php


class Author
{
    public string $name;
    public ?array $books = [];

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $books argument of the constructor can be optional
    /**
     * @param string $name
     * @param array|null $books
     */
    public function __construct(string $name, array $books = null)
    {
        $this->name = $name;
        $this->books = $books;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array|null
     */
    public function getBooks(): ?array
    {
        return $this->books;
    }

    /**
     * @param array|null $books
     */
    public function setBooks(?array $books): void
    {
        $this->books = $books;
    }


    /**
     * @param string $title
     * @param float $price
     * @return Book
     */
    public function addBook(string $title, float $price): Book
    {
        // TODO Create instance of the book. Add into $books array and return it
        $book = new Book($title, $price);
        $book->setAuthor(new Author($this->name));
        $this->books[] = $book;
        return $book;
    }
}