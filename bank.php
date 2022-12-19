<?php include 'config.php' ;

$senderid = $_REQUEST['SenderID'];
$sendername = $_REQUEST['SenderName'];
$receiverid = $_REQUEST['ReceiverID'];
$receivername = $_REQUEST['ReceiverName'];
$amount = $_REQUEST['Amount'];
$sql = "INSERT INTO transfer Values('$senderid','$sendername','$receiverid','$receivername','$amount')";
if(mysqli_query($conn,$sql)){
    $sql = "SELECT * from customer where CustomerID=$senderid";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customer where CustomerID=$receiverid";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);
    if (($amount)<0)
   {
        echo '<script>';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    else if($amount > $sql1['Amount']) 
    {
        
        echo '<script>';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    else if($amount == 0){

        
         echo "alert('Zero value cannot be transferred !')";
        
     }


    else {
                $newbalance = $sql1['Amount'] - $amount;
                $sql = "UPDATE customer set Amount=$newbalance where CustomerID=$senderid";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['Amount'] + $amount;
                $sql = "UPDATE customer set Amount=$newbalance where CustomerID=$receiverid";
                mysqli_query($conn,$sql);
                
               
                    
                }

                $newbalance= 0;
                $amount =0;
        
    



    include 'connect.php';
    
}

else {
    echo "unsuccesful";
}
mysqli_close($conn);
?>