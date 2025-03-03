<?php
  
   $error =array("error1"=>"","error2"=>"");
   $titleError="";
   $notesError="";
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
    <title>Document</title>
</head>
<body>
    <?php include("TEMPLATE/header.html");?>
    <?php include("TEMPLATE/back.html");?>
    <div>
         <form action="index.php" method="POST">
            <input type="text" name="title"  placeholder="name" required/>
            <br>
            <input type="text" name="notes" placeholder="notes" required/>
            <br>
            <input type="submit" name="submit" />
         </form>
    </div>
    <?php include("TEMPLATE/footer.html");?>
</body>
</html>