<?php


namespace FileHandler\Modules\FileAsset\Controller;



class FileController {
    
    public static function world()
    {
        echo'Hi'. getenv('APP_ENV');
    }

}
