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
            height:80vh;
            overflow-y:scroll;
            background-color:#3c3cf19a;
        }
        #notes{
            border: 1px solid #3c3cf19a;
            padding:10px;
            border-radius:10px;
            margin-bottom:20px;
            margin-left:10px;
            margin-right:10px;
            background-color:black;
            color:white;
            margin-top:7px;
            
        }

        *{
            background-color:black;
        }

        #notes a{
            text-decoration:none;
            border-color: #3c3cf19a;
            transition: 1s ease;
            color:white;
            background-color:#3c3cf19a;
        }

        #notes a:hover{
            background-color:white;
            color:#3c3cf19a;
        }
    </style>
</head>
<body>
<div class="container">
 <?php include("TEMPLATE/header.html");?> 
  <div id="contain" class="">
            <?php foreach($data as $dt): ?>
                <div id="notes" class="">
                           <h1><?php echo $dt['title']?></h1>
                           <a href="note.php? id=<?php echo $dt['id']?>" class="btn">more</a>
                </div>    
            <?php endforeach?>
     </div>
    <?php include("TEMPLATE/footer.html");?> 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

