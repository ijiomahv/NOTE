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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <?php include("TEMPLATE/header.html");?>
    <?php include("TEMPLATE/back.html");?>
    <div class="contain">
         <form action="index.php" method="POST">
            <input type="text" name="title"  placeholder="name" class="form-control" required/>
            <br>
            <input type="text" name="notes" placeholder="notes" class="form-control" required/>
            <br>
            <input type="submit" name="submit" />
         </form>
    </div>
    <?php include("TEMPLATE/footer.html");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>