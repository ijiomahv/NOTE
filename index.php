<?php
   include("TEMPLATE/conn.php");

   if (isset($_POST['submit'])) {
         $title = htmlspecialchars($_POST['title']);
         $notes= htmlspecialchars($_POST['notes']);
         $sql ="INSERT INTO note(title,data_) VALUES('$title','$notes')";
         $result= mysqli_query($conn,$sql);
         if ($result) {
             header('Location: notes.php');
         }   
   }
       
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
             border:1px solid black;
             padding:20px;
             border-radius:5px;
        }
        #contain1{
            height:80vh;
            background-color:#3c3cf19a;
            
        }
        *{
            background-color:black;
        }
        #btn{
            color:white;
            background-color: #3c3cf19a;
            
        }
        #form{
           
            
        }
    </style>
</head>
<body>
    <?php include("TEMPLATE/header.html");?>
    <?php include("TEMPLATE/back.html");?>
    <div id="contain1">
    <div class=" container" id="contain"  >
       <div id="form"> 
         <form action="index.php" method="POST">
            <input type="text" name="title"  placeholder="name" class="form-control" required/>
            <br>
            <input type="text" name="notes" placeholder="notes" class="form-control" required/>
            <br>
            <input type="submit" name="submit" class="btn" id="btn" />
         </form>
       </div> 
    </div>
    </div>
    <?php include("TEMPLATE/footer.html");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>