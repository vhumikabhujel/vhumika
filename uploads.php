<?php
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    //check if file already exists
    if(file_exists($target_file)){
        echo"sorry,file already exists.";
        $uploadOk=0;
    }

//check file size
if($_FILES["fileupload"]["size"]>50000000){
    echo"sorry,your file is too large.";
    $uploadOK=0;
}
//allow certain file formats 
if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "sorry,only JPG,JPEG,PNG & GIF files are allowed.";
    $uploadOK = 0;

}
//check if $uploadok is set to 0 by an error 
if($uploadOk==0){
    echo"sorry,your file was not uploaded.";
    //if everything id ok,try to upload file
}else{
    if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)){
        //echo "the file".basename(
        //    $_FILES["fileupload"]["name"])."has been uploaded.";
        echo"sucess";
    }else{
        echo"sorry,there was an error uploading your file.";

    }
        
    }
}

?>