<html>
 <body>
  <?php  
   $a=intval($_GET["t"]);
   $b=intval($_GET["t2"]);
   $c=intval($_GET["t3"]);
   $d=intval($_GET["t4"]);
   $e=intval($_GET["t5"]);
   $f=$a + $b + $c + $d + $e;
   $g=$f/5;
    if($g>=90)
     echo "A";
    elseif($g>=80) 
     echo "B";
    elseif($g<80) 
     echo "c";
    ?>              
 </body>
</html>