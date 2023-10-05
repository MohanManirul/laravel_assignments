<?php

class FileReader{
    public $data = "Reading Public data";
    protected $data2 = "Reading protected data";
    public $data3 = "Reading private data";

    public function getData(){
        return $this->data3;
    }

}

$fileReader = new FileReader();
echo $fileReader->$data3 ;
echo $fileReader->getData() ;
// echo $fileReader->getData();

?>