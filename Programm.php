<?php
#write a program to find the sum of digits
$a=23;
$sum=0;
while($a>0)
{
    $digit=$a%10;//23/10=3
    $sum=$sum+$digit;//0+3=3
    $a=$a/10;//23/10=2
}
echo "Sum of digits is: $sum"."<br>";
?>

<?php
#write a program to check whether a number is even or odd
$a=23;
if($a%2==0)
{
    echo "Number is even"."<br>";
}
else
{
    echo "Number is odd"."<br>";
}
?>

<?php
#write a program to check whether a number is prime or not
$a=24;
$prime=1;
for($i=2;$i<$a;$i++)
{
    if($a%$i==0)
    {
        $prime=0;
        break;
    }
}
if($prime==1)
{
    echo "Number is prime"."<br>";
}
else
{
    echo "Number is not prime"."<br>";
}
?>

<?php
#write a program to table of a number
$a=5;
for($i=1;$i<=10;$i++)
{
    $table=$a*$i;
    echo "$a x $i = $table"."<br>";
}
?>

<?php
#write a program to find the factorial of a number
$a=5;
$factorial=1;
for($i=1;$i<=$a;$i++)
{
    $factorial=$factorial*$i;
}
echo "Factorial of $a is: $factorial"."<br>";
?>

<?php
#write a program to find number is armstrong or not
$n=377;
$temp=$n;
$sum=0;
while(floor($n))
    {
        $rem=$n%10;
        $sum=$sum+($rem*$rem*$rem);
        $n=$n/10;
    }
    if($sum==$temp){
        echo "Number is armstrong.";
    }
    else{
        echo "Number is not armstrong.";
    }
?>