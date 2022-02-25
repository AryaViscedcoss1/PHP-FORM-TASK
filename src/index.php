<!DOCTYPE html>
<html>
<head>
<title>template</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="post">
Number1: <input type="number" name="number1" ><br><br>
Number2: <input type="number" name="number2" min="1"><br><br>
Result <input type="number" name="result" value="<?php echo cal() ?>"><br><br>
<input type="submit" value="+" name="submit1">
<input type="submit" value="-" name="submit2">
<input type="submit" value="*" name="submit3">
<input type="submit" value="/" name="submit4"><br>
</form> 
<?php  
function cal()
{

$num1=$_POST["number1"];
$num2=$_POST["number2"];
$result=$_POST["result"];
if(isset($_POST["submit1"]))
{
   $result=$num1+$num2;
}
elseif(isset($_POST["submit2"]))
{
  $result=$num1-$num2;
} 
elseif(isset($_POST["submit3"]))
{
  $result=$num1*$num2;
} 
elseif(isset($_POST["submit4"]))
{
  $result=$num1/$num2;
}

return $result;

}

?>
</body>
</html>
<script src="script.js "></script>