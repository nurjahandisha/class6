<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action="" method="get">
        Name:<input type="text" name="Fname"><br><br>
        Age:<input type="text" name="age"><br><br>
        <input type="submit" name="save">
</body>
</html>
<?php
for($x=1; $x<=10; $x++){
 if($x<=10){
    echo"$x-";
 }else{
    echo"$x"."/n";
 }
}
echo"</br>";
 $sum=0;
 for($i=1;$i<=30;$i++){

$sum +=$i;
 }
 echo"total is $sum</br>";

 echo"<br>";
 for($i=1;$i<=5;$i++)
 {
    echo str_repeat("*",$i) . "</br>";
 }
 for($i=5;$i>=1;$i--)
 {

    echo str_repeat("*",$i) . "</br>";
 };

echo"</br>";
$num=4;
for($x=1;$x<=10;$x++){
    $y=$num*$x;
    echo"$num*$x=$y <br>";
}
echo "<h1>facturial decrement</h1>";
$num=1;
$y=1;
for($x=10;$x<=$num;$x--){
    $y*=$x;

}
echo$y;
echo"</br>";

for($a=1;$a<=50;$a=$a+10){
    for($b=$a;$b<$a+10;$b++){
        echo $b."</br>";
    }
    echo"</br>";
}
echo"</br>";
$a=1;
while($a<=6){
    echo $a .")my name</br>";
    $a++;
}
echo"</br>";
$a=5;
do{
    echo $a . ")hello world</br>";
    $a--;
}while($a>=1);
echo"</br>";
$age=[
    "nur"=>21,
    "jabed"=>42,
    "alom"=>31,
];
echo"<ul>";
foreach($age as $key => $ages){
    echo "<li>$key = $ages </li>";

}
echo"</ul>";

