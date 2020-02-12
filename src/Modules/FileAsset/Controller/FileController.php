<?php


namespace FileHandler\Modules\FileAsset\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FileController {
    
    public static function world()
    {
        echo'Hi'. getenv('APP_ENV');
    }

}
