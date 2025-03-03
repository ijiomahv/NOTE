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
        mysqli_close($conn);
    }
    
    


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
    </div>  
    <?php include("TEMPLATE/footer.html");?>
</body>
</html>