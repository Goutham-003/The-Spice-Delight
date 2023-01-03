<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="jumbotron">
            <center>
            <h1>Bill</h1>
            </center>
            <hr>
    <?php
    $server_name="localhost";
    $user_name="root";
    $password="Loveyourself";
    $database_name="restaurant";
    $conn = mysqli_connect($server_name,$user_name,$password,$database_name);

    $query="SELECT dish_name,price,Qty FROM bill WHERE Qty>0";
    $res=$conn->query($query);
    ?>




<table class="table table-bordered" style="background-color-white">
    <thead class="table-dark">
        <tr>
            <th>Dish Name</th>
            <th>Price</th>
            <th>Quantity</th>
            
        </tr>
    </thead>

<?php
while($row=mysqli_fetch_array($res))
                {
                    ?>
                        <tbody>
                            <tr>
                                <th><?php echo $row['dish_name']; ?> </th>
                                <th><?php echo $row['price']; ?> </th> 
                                <th><?php echo $row['Qty']; ?> </th>                          
                            </tr>
                        </tbody>
                    <?php
                    
                }
?> 
</table>
<br><br>
<?php
$sql = "SELECT price,Qty FROM bill WHERE Qty>0";
$result = $conn->query($sql);
$sum=0;
//display data on web page
while($row = mysqli_fetch_array($result)){
    
    $sum=$sum+($row['price']*$row['Qty']);
    
}
$gst=$sum*(0.05);
$sum1=$gst+$sum;
echo "<table class='table table-secondary' style='background-color-white'>
<thead class='table-light'>
<tr class='table-info'>
    <th>Net Price</th>
    <th>:$sum</th> 
</tr>
</thead>
<thead class='table-light'>
<tr class='table-info'>
    <th>G.S.T &nbsp; &nbsp;&nbsp;</th>
    <th>:$gst</th> 
</tr>
</thead>

<thead class='table-light'>
<tr class='table-info'>
    <th>Final Price &nbsp;</th>
    <th>:$sum1</th> 
</tr>
</thead>
</table>";
?>
</h5>
</div>
</div>
<div class="text-center">
    <button onclick="window.print();" class="btn btn-primary" id="btnp">
        Print
    </button>
    <br><br>
    <form action="update.php"method="post" id="Home">
  <input type="submit" class="btn btn-primary" name="Home" value="Home"></input>
</form>
    
</div>
</body>
</html>