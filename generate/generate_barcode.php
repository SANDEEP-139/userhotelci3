<?php
// if(isset($_POST['generate_barcode']))
// {
// $text=$_POST['barcode_text']; 
 
// echo "<img alt='testing' src='php-barcode-master/barcode.php?codetype=Code39&size=40&text=".$text."&print=true' />"; 
//  //echo "<img alt='testing' src='barcode/barcode.php?codetype=Code39&size=40&text=".$text."&print=true'/>";
// }


 $emp_id= $_GET['id'];
$name= $_GET['name'];

$year= date("Y");
  $newemp_id= "LGE".$name.$emp_id;
 
 generate($newemp_id);


 function generate($newemp_id){
 	
 	?>
 	<center >
 		
 	<?php 

 	echo "<a href=php-barcode-master/barcode.php?codetype=Code128&size=50&text=".$newemp_id."&print=true' download=$newemp_id><img alt='testing' width='300px' height='200px' src='php-barcode-master/barcode.php?codetype=Code39&size=50&text=".$newemp_id."&print=true' /></a>"; 
    ?>
</center>
<?php
 }
?>   