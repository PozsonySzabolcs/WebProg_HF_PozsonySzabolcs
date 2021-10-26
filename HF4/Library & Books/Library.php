<?php
namespace LibraryNamespace;
require_once 'loader.php';

class Library extends AbstractLibrary
{
    // TODO Implement all the methods declared in AbstractLibrary class
    public function addAuthor(string $authorName): Author
    {
        // TODO: Implement addAuthor() method.
        $author = new Author($authorName);
        $authors = $this->getAuthors();
        $authors[] = $author;
        $this->setAuthors($authors);
        return $author;
    }

    public function addBookForAuthor($authorName, Book $book)
    {
        // TODO: Implement addBookForAuthor() method.
        foreach ($this->getAuthors() as $author) {
            if ($author->getName() === $authorName) {
                $author->addBook($book->getTitle(), $book->getPrice());
            }
        }
    }

    /**
     * @throws Exception
     */
    public function getBooksForAuthor($authorName)
    {
        // TODO: Implement getBooksForAuthor() method.
        foreach ($this->getAuthors() as $author) {
            if ($author->getName() === $authorName) {
                return $author->getBooks();
            }
        }
        throw new Exception("The method doesn't found the author name!");
    }


    /**
     * @throws Exception
     */
    public function search(string $bookName): Book
    {
        // TODO: Implement search() method.
        foreach ($this->getAuthors() as $author) {
            for ($i = 0; $i < count($author->getBooks()); $i++) {
                if ($bookName === $author->getBooks()[$i]->title)
                    return new Book($bookName, $author->getBooks()[$i]->price, $author);
            }
        }
        throw new Exception("The method doesn't found the book name!");
    }

    public function print()
    {
        // TODO: Implement print() method.
        echo "<br>";
        foreach ($this->getAuthors() as $author) {
            echo $author->getName(), "<br>";
            echo "----------------------", "<br>";
            foreach ($author->getBooks() as $book) {
                echo $book, "<br>";
            }
            echo "<br>";
        }
    }
}