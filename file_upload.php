<?php
//$_FILES['file']['error']==0
if(!empty($_FILES['file']['tmp_name'])){
    $filename=md5(time());
    /* $subname=$_FILES['file']['name'];
    $subname=explode(".",$subname); */

    $subname=explode(".",$_FILES['file']['name'])[1];

    $newFileName=$filename.".".$subname;

    echo "new=>".$newFileName."<br>";
    echo "tmp_name=>".$_FILES['file']['tmp_name']."<br>";
    echo "fileOrignName=>".$_FILES['file']['name']."<br>";
    
    move_uploaded_file($_FILES['file']['tmp_name'],"file/".$newFileName);
}

jlkjj;lj;lj;lj;ljj;lj;ljljl;kj

?>