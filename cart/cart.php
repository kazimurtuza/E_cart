
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
    <script src="https://kit.fontawesome.com/29ad4efa11.js" crossorigin="anonymous"></script>
    <title>shopping  card</title>
  </head>
  <body>
    <h1 style="font-family: fantasy;" class="text-center text-danger">shopping  card</h1>
    <div class="container">
    <div class="row">
      <?php 
       while($row = mysqli_fetch_array($result))
       {
       ?>
    
        <div class="col-lg-3 col-md-3 col-sm-12">

    <form>
        <div class="card">
            <div class="card-title">
                <h5 class="bg-info p-2"><?php   echo $row['name'] ;?></h5>  
            </div>
        <div class="card-body ">
           
            <img src="<?php echo $row['image'];?>" alt="phone" class="img-fluid m-2" style="height:250px;">
            <h6>&#2547  <?php echo $row['price'];?> <span class="text-success">(<?php echo $row['document'];?> %off)</span></h6>
            <form action="">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Quantity">
                </div>
           
           </form>
        
            <h5><span class="badge badge-success">4.4 <i class="far fa-star"></i>(46932)</span></h5>
            
            <div class="btn-group d-flex">
                <input type="button" value="Add to cart" class="btn btn-success flex-fill">
                <input type="button" value="Buy online" class="btn btn-warning flex-fill">
            </div>
        </div>

        </div>
      

     </form>
    </div>
    
       <?php }?>
       </div>
       </div>


       <div class="container">
         <h1>card control system</h1>


       </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>