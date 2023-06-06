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
try{
    $statement = $pdo->prepare("select * from files");
    $statement->execute();
    $details=$statement->fetchAll(PDO::FETCH_OBJ);
}
catch(PDOException $e){
    die("connection problem");
}

?>


<table border="2px">
    <tr>
        <th colspan="8"> Users Details</th>
    </tr>
     <tr>
         <th rowspan>id</th>
         <th>images</th>
         <th>Action</th>
     </tr>
     <?php foreach($details as $detail):?>
     <tr>
         <td><?php echo $detail->id?></td>
         <td><img src="<?php echo $detail->img?>" alt="" width="100px"></td>
         <td>
             <form method="post" action="edit.php">
             <button type="submit" value="<?=$detail->id;?>" name="edit">Edit</button>
             </form>
             <form method="post" action="delete.php">
             <button type="submit" value="<?=$detail->id;?>" name="Del" class="del">Delete</button>
             </form>
         </td>
     </tr>
     <?php endforeach;?>
 </table>