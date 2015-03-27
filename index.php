<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
$a=(int)$_POST['first'];
$b=(int)$_POST['second'];
$p=$_POST['operation'];
 
  if($p=='+')
    $c=$a+$b;
  else if($p=='-')
    $c=$a-$b;
  else if($p=='*')
    $c=$a*$b;
  else if($p=='/')
    {
      if($b==0) echo "You can not divide by zero!";
      else $c=$a/$b;
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Calculator</title>
 
</head>
<h1>My first calculator</h1>
<body>
<form action="" method="POST">
   <input name="first" type="textbox" placeholder="Enter first number" required/>
   <select name="operation">
   <option value="+">+</option>
   <option value="-">-</option>
   <option value="*">*</option>
   <option value="/">/</option>
   </select>
   <input name="second" type="textbox" placeholder="Enter second number" required/>
   <input name="submit" type="submit" value="Submit" />
   </form>
 
<?php
if(isset($c))
echo "<b>".$a." ".$p." ".$b." = ".$c."</b>";
?>
</body>
</html>