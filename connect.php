<?php include 'config.php' ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Transaction-History</title>
    <style>
    h1{
    font-family: 'comic sans ms';
    font-style: italic;
    font-size: 35px;
   text-align: center;
   background-image:linear-gradient(rgb(0, 00, 100));
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
    
</head>

<body style="background-image:linear-gradient(white ,black,white);">
            <header>
            <h1>SPARKS-FOUNDATION(CENTRAL BANK)</h1>
        
            <hr>
            <div class="container" style="word-spacing: 30px;">
                <a href="index.php" style="text-decoration: none; text-align: center;  height:60px;margin-top: 100px;font-weight: bold;">Home</a>&nbsp;
                <a href="transfer.php" style="text-decoration: none; text-align: center;height:60px;margin-top: 100px;font-weight: bold;">Transfer</a>&nbsp;
                
       
                <a href="customers.php" style="text-decoration: none; text-align: center;height:60px;margin-top: 100px;font-weight: bold;">Customer-details</a>&nbsp;
                
    
            </div>
</header>

<h2 style="text-align:center;color;font-size:35px;font-weight:bold;height:60px;font-style:italic;background-image:linear-gradient(black,white,black);">
            Transaction History 
        </h2>
 


<!-- Table -->
       <div>
    <table class="table">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">SenderID</th>
                <th class="text-center">SenderName</th>
                <th class="text-center">ReceiverID</th>
                <th class="text-center">ReceiverName</th>
                <th class="text-center">Amount</th>
              
            </tr>
        </thead>
        <tbody>
        <?php


$sql ="SELECT * FROM  transfer";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color:black;">
            <td class="text-center py-2"><?php echo $rows['SenderID']; ?></td>
            <td class="text-center py-2"><?php echo $rows['SenderName']; ?></td>
            <td class="text-center py-2"><?php echo $rows['ReceiverID']; ?></td>
            <td class="text-center py-2"><?php echo $rows['ReceiverName']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Amount']; ?> </td>
            
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>
</div>

    <!-- footer -->

    <div class="copyright">
    <p>
        <p >By<pre >SUMIT JAIN</pre></p>
       &copy; copyright 2022 All Rights Reserved<a href="https://internship.thesparksfoundation.info/"> SPARKS-FOUNDATION</a> .
    </p>
</div>
</body>

</html>