<?php 
$i=1;
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hotel.Com</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px black;text-shadow:2px 2px #fff;">Admin Profile</h1><br>
<center><img src="logo/admin.png"style="width:180px;height:180px;background-color:blue;"class="img-circle"></center>
<div class="container"style="width:100%;">
    <table class="table">
        <thead>
        <tr>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"> </th>
            <td>Full Name:</td>
            <td>Ayden Frank</td>
            <td> </td>
        </tr>
        <tr>
            <th scope="row"> </th>
            <td>Gmail:</td>
            <td>ayden@gmail.com</td>
            <td> </td>
        </tr>
        <tr>
            <th scope="row"> </th>
            <td colspan="2"> </td>
            <td> </td>
        </tr>
        </tbody>
    </table>
</div>
<?php   
}
?>
</body>
</html>