
<?php
try {
    $pdo = new PDO
    (
        'mysql:host=127.0.0.1;dbname=images',
        'admin',
        'welcome'
    );
}

catch(Exception $e){
    die("Connection Failed");
}


 $banner=$_FILES['banner']['name']; 
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 $date = date('m/d/Yh:i:sa', time());
 $rand=rand(10000,99999);
 $encname=$date.$rand;
 $bannername=md5($encname).'.'.$bannerexptype;
 $bannerpath="images/".$bannername;
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);

 $ins = $pdo->prepare("INSERT INTO files (id,img)VALUES('2','$bannerpath')");
 $ins->execute();

 header("Location: uploded.php");
?>