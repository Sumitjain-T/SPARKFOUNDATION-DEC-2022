<?php 
include 'config.php';
?>
<!doctype html>
<html lang="en">
<style>
  h1{
    font-family: 'comic sans ms';
    font-style: italic;
    font-size: 35px;
   text-align: center;
   background-image:linear-gradient(yellow,pink);
   border:1px;
   border-style:hidden;  
}
.copyright{
    text-align: center;
    margin-top: 35px;
    font-size: 25PX;
    color:rgb(15, 15, 15);
}
.copyright a{
    color:rgb(13, 0, 128);
    text-decoration: none;
}


table, th,td {
  margin-left: 200px;
    border-collapse: collapse;
    border: 2px solid black;
    background-image:linear-gradient(pink,white);
    font-size: 30px;
border-style:groove;
    text-align: center;
    line-height:60px;
    margin-top:80px;
    width:1100px;

}
.container{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 25px;
   font-style: normal ;
   align-content: space-between;
   text-align: right;
   
}
.container a{
    background-color:white;
    color:black;
    width:200px;
    font-size: 30px;
    height:100px;
    margin-top: 60px;
    border:1px;
    border-style:dotted;
    border-radius: 20px;
  }

</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Customers</title>
    
</head>

<body style="background-color:lightblue;">
            <header>
            <h1>SPARKS-FOUNDATION(CENTRAL BANK)</h1>
        
            <hr>
            <div class="container" style="word-spacing: 30px;">
                <a href="index.php" style="text-decoration: none; text-align: center;  height:60px;margin-top: 100px;font-weight: bold;">Home</a>&nbsp;
                <a href="transfer.php" style="text-decoration: none; text-align: center;height:60px;margin-top: 100px;font-weight: bold;">Transfer</a>&nbsp;
                
       
                <a href="connect.php" style="text-decoration: none; text-align: center;height:60px;margin-top: 100px;font-weight: bold;">Transaction-History</a>&nbsp;
                
    
            </div>
            </header>
    

        <h2 style="text-align:center;color;font-size:35px;font-weight:bold;height:60px;font-style:italic;background-image:linear-gradient(black,white,black);">
             <strong >Customer Details</strong> 
        </h2>
 
      
<div style="color:black;text-align:center;">
    <a href="transfer.php"><button type="button" style="text-align:center;background-color:green;font-style: italic;color:white;height:40px;font-size: 35px;font-weight: bold;">Click Here to Transfer Money</button></a>
</div>
       <div>
    <table class="table">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">CustomerID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email-Id</th>
                <th class="text-center">Amount</th>
              
            </tr>
        </thead>
        <tbody>
        <?php
$sql ="SELECT * FROM customer";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color:black;">
            <td class="text-center py-2"><?php echo $rows['CustomerID']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Name']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Email-Id']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Amount']; ?> </td>
        <?php
}
        ?>
        </tbody>
    </table>
    </div>
</div>
    <div class="copyright">
    <p>
        <p >By<pre >SUMIT JAIN</pre></p>
       &copy; copyright 2022 All Rights Reserved<a href="https://internship.thesparksfoundation.info/"> SPARKS-FOUNDATION</a> .
    </p>
</div>
</body>
</html>
