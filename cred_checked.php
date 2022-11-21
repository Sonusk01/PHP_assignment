<?php
$fname=$_POST["fname"];
$pwd=$_POST["pwd"];
$address=$_POST["address"];
$email=$_POST["email"];
$age=$_POST["age"];
$Gender=$_POST["Gender"];
/*$Hobbies=implode(',' ,$_POST["Hobbies"]);*/
$hby=explode(',',$Hobbies);
foreach($hby as $h)
{
echo $h."<br>";
}
$documentno.=$_POST["documentno."];
$file=$_FILES['document']['name'];
$filesize=$_FILES['document']['size'];
$filetype=pathinfo($file,PATHINFO_EXTENSION);
$tmp=$_FILES['document']['tmp_name'];
$actual_path="docs/".$file;
move_uploaded_file($tem,$actual_path);
echo "Name is :-".$fname."<br>";
echo "Your Password :-".$pwd."<br>";
echo "Your Address is:- ".$address."<br>";
echo "Your Email is :-".$email."<br>";
echo "Your Age is :- ".$age."<br>";
echo "Your Gender is :-".$Gender."<br>";
echo "Hobbies is:-".$Hobbies."<br>";
echo $file."<br>";
echo $filesize. "<br>";
echo $filetype."<br>";
echo $actual_path."<br>";
echo $tmp."<br>";


?>
