<?php
    include('TEMPLATE/conn.php');

     

    if (isset($_POST['delete'])) {
        $id_to_delete= mysqli_real_escape_string($conn,$_POST['delete_id']);
        $sql="DELETE FROM note WHERE id= $id_to_delete";
        if (mysqli_query($conn,$sql)) {
             header('Location: notes.php');
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql="SELECT * FROM note WHERE id=$id";
        $result =mysqli_query($conn,$sql);
        $data= mysqli_fetch_assoc($result);
    }

   if (isset($_GET['submit'])) {
      $id = $_GET['_id'];
      $title =$_GET['title'];
      $note = $_GET['note'];

      echo $id;
      echo $title;
      echo $note;

      $sql="UPDATE note SET title='$title', data_='$note' WHERE id=$id";
      $result= mysqli_query($conn,$sql);
      if ($result) {
          header('Location: succesful.php');
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
            height:70vh;
            overflow:scroll;
        }
    </style>
</head>
<body>
   <?php include("TEMPLATE/header.html");?>
   <?php include("TEMPLATE/back.html");?>
   <div id="contain">
      <div>
          <h1><?php echo $data['title']?></h1>
          <p><?php echo $data['data_']?></p>
      </div>
      <form action="note.php" method="POST">
           <input type="hidden" name="delete_id" value="<?php echo $data['id']?>"/>
           <input type="submit" name="delete">
      </form>
      <br>
      <div>
      <button>EDIT</button>
        <div>
            <form action="note.php" method="GET">
                <input type="hidden" name="_id" value="<?php echo $data['id']?>"/>
                <br>
                <input type="text" name="title" value="<?php echo $data['title']?>">
                <br>
                <input type="text" name="note" value="<?php echo $data['data_']?>">
                <br>
                <input type="submit" name="submit"/>
            </form>
        </div>
    </div>
    </div>  
    <?php include("TEMPLATE/footer.html");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>