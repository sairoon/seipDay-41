<?php


namespace App\classes;


class Student
{
    public $student, $students, $name, $email, $mobile, $image, $imageName, $imageDirectory, $file, $filePath, $fileData;
    public $array, $array1, $array2;

    public function __construct($post = null, $files = null){
        if (!empty($post)){
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->mobile = $post['mobile'];
        }
        if (!empty($files)){
            $this->image = $files['image'];
        }
    }
    public function addStudent(){
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload-file/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        $this->filePath = 'hello.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileData = "$this->name,$this->email,$this->mobile,$this->imageDirectory$$";

        fwrite($this->file, $this->fileData);
        fclose($this->file);
        return 'Student created successfully.';
    }
    public function getAllStudent(){
        $this->filePath = 'hello.txt';
        $this->fileData = file_get_contents($this->filePath);
        $this->array = explode('$$', $this->fileData);
        foreach ($this->array as $key => $value){
            $this->array1 = explode(',',$value);
            if ($this->array1[0]){
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['mobile'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
    }
}