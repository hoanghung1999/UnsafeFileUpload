<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $allow=0;
    if($_POST['submit']){
        if($_FILES['file']['error']>0){
            echo"<script>alert('Du lieu upload len bị lỗi');window.history.back()</script>";

        }
    
        $targetfile="../uploads/".basename($_FILES['file']['name']);
        if(file_exists($targetfile)){
            echo "<script>alert('FILE EXISTS');window.history.back()</script>";
        }else{
            $allow=1;
        }
        if($allow==1){
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile)) {
                echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded \\n target file".$targetfile."');window.history.back()</script>";
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
        }
    }
}
?>