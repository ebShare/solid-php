<?php

require "FileInfomation.php";
require "FileUploader.php";
require "ImageResize.php";


class Uploader
{
    private $name;
    private $type;
    public $directory = '';
    public $validTypes = [];
    public $error;

    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->temporaryName = $fileData['tmp_name'];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->validTypes = ['PNG', 'png', 'jpeg', 'jpg', 'JPG'];
    }

    public function uploadFile()
    {
        $fileUploader= new FileUploader();
        try {
            return $fileUploader->uploadFile($this->type,$this->validTypes,$this->name);
        }
        catch(Exception $e){
            $this->error=$e->getMessage();
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getExtension()
    {
        $fileInformation=new FileInformation();
        return $fileInformation->getExtension($this->name);
    }

    public function resize($origin, $destination, $width, $maxHeight)
    {
        $imageResize=new FileInformation();
        return $imageResize->resize($this->name,$origin, $destination, $width, $maxHeight);
    }
}
