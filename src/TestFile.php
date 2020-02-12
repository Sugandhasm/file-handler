<?php

namespace FileHandler;



use FileHandler\Modules\FileAsset\Controller\FileController;

require __DIR__ . '/../vendor/autoload.php';

class TestFile {
    
    public function __construct(FileController $fc){
        $fc->world();
    }
}

$fc = new FileController();

new TestFile($fc);
