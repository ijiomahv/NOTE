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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

