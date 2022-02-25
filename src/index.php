</head>
<body>
<form action="" method="post">
Units <input type="number" name="bill"><br>
<input type="submit" name="submit"><br>
</form> 
<?php  
  $b1=0;
  $b2=0;
  $b3=0;
  $b4=0;
  $b=$_POST["bill"];
 if (isset($_POST["submit"]))
 {
    if($b<=50){
      $b1=($b)*3.5;
      $t=$b1+$b2+$b3+$b4;
      echo "<h1>For first 50 units is Rs. 3.50/unit ".$b1." </h1>";
      echo "Total amount ".$t." </h1>";

    }


    elseif($b>50 && $b<=150)
      {
        $b2=($b-50)*4;
        $b1=50*3.5;
        $t=$b1+$b2;
        echo "<h1>For first 50 units is Rs. 3.50/unit ".$b1." </h1>";
        echo "<h1>For next 100 units is Rs. 4.00/unit ".$b2." </h1>"; 
        echo "Total amount ".$t." </h1>";
      }
    

      elseif($b>150 && $b<=250)
      {
        $b2=($b-100)*4;
        $b1=50*3.5;
        $b3=($b-150)*5.2;
        $t=$b1+$b2+$b3;
        echo "<h1>For first 50 units is Rs. 3.50/unit ".$b1." </h1>";
        echo "<h1>For next 100 units is Rs. 4.00/unit ".$b2." </h1>"; 
        echo "<h1>For next 100 units is Rs. 5.20/unit ".$b3." </h1>"; 
        echo "Total amount ".$t." </h1>";
      }

    
      elseif($b>=250)
      {
        $b2=($b-100)*4;
        $b1=50*3.5;
        $b3=($b-150)*5.2;
        $b4=($b-250)*6.5;
        $t=$b1+$b2+$b3+$b4;
        echo "<h1>For first 50 units is Rs. 3.50/unit ".$b1." </h1>";
        echo "<h1>For next 100 units is Rs. 4.00/unit ".$b2." </h1>"; 
        echo "<h1>For next 100 units is Rs. 5.20/unit ".$b3." </h1>"; 
        echo "<h1>For next 100 units is Rs. 5.20/unit ".$b4." </h1>"; 
        echo "Total amount ".$t." </h1>";

      }
  }


?>
</body>