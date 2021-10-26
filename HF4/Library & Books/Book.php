<?php
namespace LibraryNamespace;
class Book
{
    public string $title;
    public float $price;
    public ?Author $author;

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $author argument of the constructor can be optional
    /**
     * @param string $title
     * @param float $price
     * @param Author|null $author
     */
    public function __construct(string $title, float $price, Author $author = null)
    {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return Author|null
     */
    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    /**
     * @param Author|null $author
     */
    public function setAuthor(?Author $author): void
    {
        $this->author = $author;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->title . " - " . $this->price;
    }

}