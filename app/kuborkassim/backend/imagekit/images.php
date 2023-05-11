<?php

// echo "\n\n------------------------------------------------------------";
// echo "\n\n--------------------Retrieving Images-----------------------";
// echo "\n\n------------------------------------------------------------";
// echo "\n";

// List All Files

// need to create array containing 1) Full image url; 2) Thumbnail url
// for experience page this array needs to contain just 9 items

class GalleryFiles {
    public $path;
    public $limit;
    public $files;
    public $urls;
    public $imgkit;

    public $thisURL;
    public $nextURL;
    public $prevURL;

    public $thisIndex;
    public $nextIndex;
    public $prevIndex;

    function __construct($path, $limit, $imgkit) {
        $this->path = $path;
        $this->limit= $limit;
        $this->imgkit = $imgkit;

        $this->files = $imgkit->listFiles([   
            "path" => $path,
            "sort" => 'ASC_CREATED',             
            "limit" => $limit,
        ]); 
      }

    public function getImages(){
     $filePathSrc = htmlspecialchars(json_encode($this->path));
        foreach ($this->urls as $key => $value) { 
            $img_thumbnailURL = $value[1];
            $enc_img_thumbnailURL = htmlspecialchars(json_encode($img_thumbnailURL));
            echo ' <img onclick="getImage(' . $key . ' , ' . $filePathSrc . ')" class="galleryImg" id=" ' .  $key. '" src = " ' . $img_thumbnailURL . ' " >';
        } 
    }


    //to delete
    public function getImageTest($index){
        $filePathSrc = htmlspecialchars(json_encode($this->path));
        $img_thumbnailURL = $this->urls[$index][0];
        $enc_img_thumbnailURL = htmlspecialchars(json_encode($img_thumbnailURL));
    }

    public function getImage($index){
        $filePathSrc = htmlspecialchars(json_encode($this->path));
        $img_thumbnailURL = $this->urls[$index][1];
        $enc_img_thumbnailURL = htmlspecialchars(json_encode($img_thumbnailURL));
        echo ' <img onclick="getImage(' . $index . ' , ' . $filePathSrc . ')" class="galleryImg" id=" ' .  $index. '" src = " ' . $img_thumbnailURL . ' " >';
    }
    
    public function setUrls(){
        $a = array();
        foreach ($this->files->success as $key => $value) {
            $a[$key] = array();
            $fullURL = $value->url;
            $compressedFullURL = getCompressedURL($fullURL, 600, 1000);
            $a[$key][] = $compressedFullURL;
            $thumbnailURL = getCompressedURL($fullURL,400,400);
            $a[$key][] = $thumbnailURL;
        }    
        $this->urls=$a;
    }

        public function setPanoUrls(){
        $a = array();
        foreach ($this->files->success as $key => $value) {
            $a[$key] = array();
            $fullURL = $value->url;
            $a[$key][] = $fullURL;
            $thumbnailURL = getCompressedURL($fullURL, 312.5 , 1000);
            $a[$key][] = $thumbnailURL;
        }    
        $this->urls=$a;
    }

    public function setPanoVidUrls(){
        $a = array();
        foreach ($this->files->success as $key => $value) {
            $a[$key] = array();
            $fullURL = $value->url;
            $a[$key][] = $fullURL;
            $firstFrame = $fullURL . "/ik-thumbnail.jpg";
            $thumbnailURL = getCompressedURL($firstFrame, 312.5 , 1000);
            $a[$key][] = $thumbnailURL;
        }    
        $this->urls=$a;
    }
}


function getCompressedURL($fullURL, $height, $width){
    $compressedURL = $fullURL . "?tr=h-" . $height . "%2Cw-" . $width;
    return $compressedURL;
}
