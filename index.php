<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Page</title>
    <style>
/* body{
    margin: 0%;
    padding: 0%;
} */
h1{
    color: darkred;   
    display: inline-flex;

}
.done{
    background-color: pink;
    width: 100%;
    border: 5px solid red;
}
img2{


    display: inline-flex;
}
img{

    margin-left: 100px;
    background-image: url("logo2.png");
    background-repeat: repeat-y;
}
.sub{
    
    font-size: 20px;
    padding: 5%;
    margin: 5%;
    background-color: white;
width: 500px;

}
input{
    font-size: 20px;
width: 500px;
height: 50px;
}
button{
    width: 100px;
height: 30px;
margin-top: 5%;

}
/* .lo{
kground-color:white;bac
} */
</style>
</head>

<body>

<div class="img2">

<div class="done">



<div class="img2">
<h1 style="background-color: white;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThanks For Your Order</h1><br>
<h1 style="background-color: white;">Items Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice</h1>
<img src="logo2.png" alt="">
</div>
<div class="lo">

<?php
$s = "";
$t = "";
$total = 0;
if(isset($_POST['chk1'])){
    echo "<h1>Berccelona Pizza &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp420/=</h1>";
    echo "<br>";
    $total = $total + 420;
    $s.="420-";
    $t.="Berccelona Pizza-";
}
if(isset($_POST['chk2'])){
    echo"<h1>Italiano Suprema&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp480/=</h1>";
    echo "<br>";
    $total = $total + 480;
    $s.="480-";
    $t.="Italiano Suprema-";
}
if(isset($_POST['chk3'])){
    echo"<h1>BBQ Jalapino Pizza&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp470/=</h1>";
    echo "<br>";
    $total = $total + 470;
    $s.="470-";
    $t.="BBQ Jalapino-";
}
if(isset($_POST['chk4'])){
    echo"<h1>Naga Sausages Pizza&nbsp&nbsp&nbsp&nbsp&nbsp430/=</h1>";
    echo "<br>";
    $total = $total + 430;
    $s.="430-";
    $t.="Naga Sausages-";
}
if(isset($_POST['chk5'])){
    echo"<h1>Meaty Ball Pizza&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp490/=</h1>";
    echo "<br>";
    $total = $total + 490;
    $s.="490-";
    $t.="Meaty Ball-";
}
if(isset($_POST['chk6'])){
    echo"<h1>Chicken Naga Pizza&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp490/=</h1>";
    echo "<br>";
    $total = $total + 490;
    $s.="490-";
    $t.="Chicken Naga-";
}
if(isset($_POST['chk7'])){
    echo"<h1>Beef Naga Pizza&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp450/=</h1>";
    echo "<br>";
    $total = $total + 450;
    $s.="450-";
    $t.="Beef Naga-";
}


if(isset($_POST['chk8'])){
    echo "<h1>Double Dacker Burger &nbsp&nbsp420/=</h1>";
    echo "<br>";
    $total = $total + 420;
    $s.="420-";
    $t.="Double Dacker Burger-";
}
if(isset($_POST['chk9'])){
    echo"<h1>Italiano Burger &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp480/=</h1>";
    echo "<br>";
    $total = $total + 480;
    $s.="480-";
    $t.="Italiano Burger-";
}
if(isset($_POST['chk10'])){
    echo"<h1>BBQ Chese Burger &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp470/=</h1>";
    echo "<br>";
    $total = $total + 470;
    $s.="470-";
    $t.="BBQ Chese Burger-";
}
if(isset($_POST['chk11'])){
    echo"<h1>Naga Sausages Burger &nbsp&nbsp430/=</h1>";
    echo "<br>";
    $total = $total + 430;
    $s.="430-";
    $t.="Naga Sausages Burger-";
}
if(isset($_POST['chk12'])){
    echo"<h1>Meaty BBQ Burger&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp490/=</h1>";
    echo "<br>";
    $total = $total + 490;
    $s.="490-";
    $t.="Meaty BBQ Burger-";
}
if(isset($_POST['chk13'])){
    echo"<h1>Chicken Naga Burger &nbsp&nbsp&nbsp490/=</h1>";
    echo "<br>";
    $total = $total + 490;
    $s.="490-";
    $t.="Chicken Naga Burger-";
}
if(isset($_POST['chk14'])){
    echo"<h1>Beef Naga Burger&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp450/=</h1>";
    echo "<br>";
    $total = $total + 450;
    $s.="450-";
    $t.="Beef Naga Burger-";
}



echo "<h1>Total Bill &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h1>";
echo "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$total</h1>";
echo "<h1>/=</h1>";
// echo $s;
// echo $t;
?>
<div class="sub">
<form
  action="https://formspree.io/f/xnqwjoel"
  method="POST"
>
<p>Enter Your name Here</p>
<input name="name" type="text">
<p>Enter Your Address Here</p>
<input name="addres" type="text">
<p>Enter Your Phone Number Here</p>
<input name="number" type="text">
<p>Order Details</p>
<input type="text" name="Items Name" readonly="readonly" value="<?php echo $t;?>" />
<input type="text" name="Per Item Price" readonly="readonly" value="<?php echo $s;?>" />
<input type="text" name="Total Price" readonly="readonly" value="<?php echo $total;?>" />
<button>Submit Order</button>
</form>
</div>
</div>


</div>

</body>

</html>