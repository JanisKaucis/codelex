<?php

class Video
{
    private string $title;
    private bool $flag;
    private float $userRating;
    private int $userRatingCount = 0;

    /**
     * Video constructor.
     * @param $title
     * @param $flag
     * @param $userRating
     */
    public function __construct(string $title, bool $flag, float $userRating)
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->userRating = $userRating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float
    {
        return $this->userRating;
    }

    public function setRating($userRating): void
    {
        $this->userRating = ($this->userRating * $this->userRatingCount + $userRating) / ($this->userRatingCount + 1);
        $this->userRatingCount++;
    }

    public function getFlag(): bool
    {
        return $this->flag;
    }

    public function setFlag(bool $value): void
    {
        $this->flag = $value;
    }

}