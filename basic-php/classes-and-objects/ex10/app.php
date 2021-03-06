<?php
require_once 'VideoStore.php';
require_once 'Video.php';

class Application
{
    function run($videoStore)
    {
        /* @var $videoStore VideoStore */
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $videoStore->add_movies();
                    break;
                case 2:
                    $videoStore->rent_video();
                    break;
                case 3:
                    $videoStore->return_video();
                    break;
                case 4:
                    $videoStore->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
}

$app = new Application();
$videoStore = new VideoStore();
$app->run($videoStore);