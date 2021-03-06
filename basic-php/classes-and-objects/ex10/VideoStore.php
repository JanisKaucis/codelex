<?php
require_once 'Video.php';


class VideoStore
{
    private array $videos = [];

    public function add_movies(): void
    {
        $title = readline('Enter movie title: ');
        $flag = true;
        $rating = 0;
        $this->videos[] = new Video($title, $flag, $rating);
    }

    public function rent_video()
    {
        /* @var $video Video */
        if ($this->videos == []) {
            echo('we dont have videos to rent sorry.');
        } else {
            $this->list_inventory();
            do {
                $counter = 0;
                $videoTitle = readline('Enter movie title you want to rent: ');
                foreach ($this->videos as $video) {
                    if ($videoTitle == $video->getTitle() && $video->getFlag() == true) {
                        $counter++;
                        $video->setFlag(false);
                        break;
                    }
                }
                if ($counter == 0) {
                    echo 'We dont have this movie.' . PHP_EOL;
                }
            } while ($counter == 0);
        }
    }

    public function return_video(): void
    {
        /* @var $video Video */
        do {
            $counter = 0;
            $videoToReturn = readline('Enter video title: ');
            foreach ($this->videos as $video) {
                if ($video->getTitle() != $videoToReturn || $video->getFlag() != false) {
                    $counter++;
                } else {
                    $video->setFlag(true);
                    do {
                        $userRating = readline('Rate movie from 0 to 5: ');
                        if ($userRating < 0 || $userRating > 5) {
                            echo 'Enter valid rating.' . PHP_EOL;
                        } else {
                            $video->setRating($userRating);
                        }
                    } while ($userRating < 0 || $userRating > 5);
                    break;
                }
            }
            if ($counter == count($this->videos)) {
                echo 'This is not our movie.' . PHP_EOL;
            }
        } while ($counter == count($this->videos));
    }


    public function list_inventory(): void
    {
        /* @var $video Video */
        foreach ($this->videos as $video) {
            if ($video->getFlag() == true) {
                echo 'Title: ' . $video->getTitle() . ', Rating: ' . $video->getRating() . PHP_EOL;
            }

        }
        echo PHP_EOL;

    }
}