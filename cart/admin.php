<?php  
$host="localhost";
$uname="root";
$pass="";
$db="shop_db";
$conn=mysqli_connect($host,$uname,$pass,$db);
$que="SELECT * FROM shop_tb";
$result=mysqli_query($conn,$que);

//print_r ($row);
//echo $row['image'];
?>



       <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
<div class="container">
         <h1>card control system</h1>
         
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>image</th>
                            <th>price</th>
                            <th>document</th>
                            <th>option</th>
                        </tr>

                    </thead>
                    <tbody>
                    <?php 
                   
                   $que2="SELECT * FROM shop_tb";
                $result2=mysqli_query($conn,$que2);
                       while($row = mysqli_fetch_array($result2)){
                               echo"<tr>";
                                echo"<td>".$row['id']."</td>";
                                echo"<td>".$row['name']."</td>";
                                echo"<td>".$row['image']."</td>";
                                echo"<td>".$row['price']."</td>";
                               echo" <td>".$row['document']."</td>";
                               echo"<td><form action='' method='POST'>
                               <input type='text' name='id' value=".$row['id']." class='btn btn-info'>
                               <input type='submit' name='Edit' value='Edit' class='btn btn-success'>
                               </form>
                               </td>";
                            echo"</tr>";

                        }
                    
              

               
                    ?>
                    </tbody>

                </table>

       </div>
       <!-- -------------------Edit form ----------------- -->
       <?php 
       if(isset($_REQUEST['Edit']))
       {
            
       $querya="SELECT * FROM shop_tb where id = {$_REQUEST['id']}";
        $result=mysqli_query($conn,$querya);
        $set=mysqli_fetch_assoc($result);
     
       ?>

       <div class="container">
       <div class="row">
       <div class="col-sm-4">

<form action="" method="POST">
<div class="form-froup">
 <label for="">id :</label>
 <input type="text" value="<?php if(isset($set['id'])){
    echo $set['id']; 
    } ?>" class="form-control">
</div>
<div class="form-froup">
 <label for="">name :</label>
 <input type="text" value="<?php if(isset($set['name'])){
    echo $set['name']; 
    }
     ?>" class="form-control">
</div>
<div class="form-froup">
 <label for="">image :</label>
 <input type="text" value="<?php if(isset($set['image'])){
    echo $set['image']; 
    }
     ?>" class="form-control">
</div>
<div class="form-froup">
 <label for="">price :</label>
 <input type="text" value="<?php if(isset($set['price'])){
    echo $set['price']; 
    }
     ?>" class="form-control">
</div>
<div class="form-froup">
 <label for="">document:</label>
 <input type="text" value="<?php if(isset($set['document'])){
    echo $set['document']; } ?>" class="form-control">
</div> <br/>

 <input type="submit" value="update" class="btn btn-success">

</form>
</div>
       </div>
       </div>

<?php }?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>