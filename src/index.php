<!DOCTYPE html>
<html>
<head>
<title>template</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="post">
<input type="number" name="NUMBER" min="1"><br><br>
 HOURS TO SECONDS:<input type="radio" name="click" value="hts"><br><br>
 HOURS TO MINUTES:<input type="radio" name="click" value="htm"><br><br>
<input type="submit" name="submit"><br><br>
</form> 

<h1><?php  

if(isset($_POST['submit']))
{
    if($_POST['click']=="hts")
      {
          echo $_POST["NUMBER"]*3600;
      }
    
    else if($_POST['click']=="htm")
      {
        echo $_POST["NUMBER"]*60;
      }

    else
      {

      }
}
?></h1>
</body>
</html>
<script src="script.js "></script>