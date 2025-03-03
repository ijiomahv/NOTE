<?php 
     include("TEMPLATE/conn.php");
     $sql="SELECT * FROM note";
     $result =mysqli_query($conn,$sql);
     $data= mysqli_fetch_all($result,MYSQLI_ASSOC);
     mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #contain{
            height:70vh;
            overflow:scroll;
        }
    </style>
</head>
<body>
<?php include("TEMPLATE/header.html");?> 
  <div id="contain">
    <div>
        <?php foreach($data as $dt): ?>
            <h1><?php echo $dt['title']?></h1>
            <a href="note.php? id=<?php echo $dt['id']?>">more</a>
        <?php endforeach?>
        </div>   
    </div>
    <?php include("TEMPLATE/footer.html");?> 
</body>
</html>

