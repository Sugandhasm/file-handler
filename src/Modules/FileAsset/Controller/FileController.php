<?php


namespace FileHandler\Modules\FileAsset\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class FileController extends AbstractController {
    
    public static function world()
    {
        echo'Hi'. getenv('APP_ENV');
    }

}
