<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <style>
    .tab
   { width:80%;
    height: 50%;
     border: 2;
     margin-top:px;
     border:black;
   }
   .btn{
    margin: 30px;
    width:210px;
    height:50px;
    font-size:20px;
    margin-left:425px;
    background-color:rgb(156, 156, 156);
        }
   .bt{
    margin: 30px;
    width:210px;
    height:50px;
    font-size:20px;
    background-color:rgb(156, 156, 156);
     }
   .btn:hover{
   background-color:#3887d7;
   }
   .bt:hover{
   background-color:#3887d7;
   }
   body
   {
    background-image: url("https://images.unsplash.com/photo-1633158829875-e5316a358c6f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");

   }
   table td{
       border:2px solid black;
       padding: 15px;
   }
   table th{
       border:2px solid black;
       padding: 10px;
       background-color: #3887d7;
   }
   table{
    background-color:white;
   }
   h1{
       margin-left:550px;
       font-size:32px;
   }
   .head{
       border:2px solid black;
   }
   
</style>
</head>
<body>
<h1><I>Customer Details<I></h1>
<div class="tab">
<table width="80%"  style="margin-top:10px; margin-left:200px; border:2px solid black">
<tr style="background-color:#000; color:#fff;">
<tr class="row">
<th>Id</th>
<th>Customer name</th>
<th>Username</th>
<th>Balance</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','bbs');

if($con==False){
	echo "connection is not done";
}
$sql="SELECT id,name,email,balance FROM `customer`";
$run = mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
    echo "<tr><td>No Records Found</td></tr>";
 }
else
{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {    $count++;
    
        ?>
    <tr align="center">
    <td> <?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['balance']; ?></td>
    </tr>
    <?php
    
    
}
}

?>
</table>
</div>
<div class="content">
        <a href="transfer.php"><button class="btn"><b>Make a Transaction</b></button></a>
        <a href="history.php"><button class="bt"><b>view history</b></button></a>
</div>
</body>
</html>

