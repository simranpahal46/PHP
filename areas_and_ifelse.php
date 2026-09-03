<?php
#area of rectangle (l*b)
$l=7;
$b=6;
$area1=($l*$b) ;
echo "area of rectangle is $area1"."<br>"
?>

<?php
#area of circle (pi*r*r)
$r=5;
$area2=(3.14*$r*$r);
echo "area of circle is $area2"."<br>"
?>

<?php
#area of triangle (1/2*b*h)
$b=8;
$h=4;
$area3=(0.5*$b*$h);
echo "area of triangle is $area3"."<br>"
?>

<?php
#area of cylinder (2*pi*r*h + 2*pi*r*r)
$r=6;
$h=8;
$area4=((2*3.14*$r*$h) +(2*3.14*$r*$r) );
echo "area of cylinder is $area4"."<br>"
?>

<?php
#volume of cone (1/3*pi*r*r*h)
$r=5;
$h=10;
$volume1=(1/3*3.14*$r*$r*$h);
echo "volume of cone is $volume1"."<br>"
?>

<?php
#volume of sphere (4/3*pi*r*r*r)
$r=7;
$volume2=(4/3*3.14*$r*$r*$r);
echo "volume of sphere is $volume2"."<br>"
?>

<?php
#volume of cuboid (l*b*h)
$l=5;
$b=8;
$h=4;
$volume3=($l*$b*$h);
echo "volume of cuboid is $volume3"."<br>"
?>

<?php
#volume of cube (a*a*a)
$a=6;
$volume4=($a*$a*$a);
echo "volume of cube is $volume4"."<br>"
?>

<?php
#volume of cylinder (pi*r*r*h) 
$r=6;
$h=8;
$volume5=(3.14*$r*$r*$h);
echo "area of cylinder is $volume5"."<br>"
?>

<?php
#parameter of rectangle(2l+2w)
$l=6;
$w=5;
$parameter=((2*$l)+(2*$w));
echo "Parameter of rectangle is $parameter"."<br>";
?>

<?php
# if else statement
?>
<?php
#write a program to check a person is adult or not
$age=20;
if($age>=18)
{
    echo "Person is adult";
}
else
{
    echo "Person is not adult"."<br>";
}
?>

<?php
#write a program to check a person is eligible for voting or not
$age=20;
if($age>=18)
{
    echo "Person is eligible for voting";
}
else
{
    echo "Person is not eligible for voting"."<br>";
}
?>

<?php
# write a program to check a number is even or odd
$num=7;
if($num%2==0)
{
    echo "Number is even";
}
else
{
    echo "Number is odd"."<br>";
}
?>

<?php
# write a program to check triangle is valid or not
$a=5;
$b=6;
$c=7;
$sum=($a+$b+$c);
if($sum==180)
{
    echo "Triangle is valid";
}
else
{
    echo "Triangle is not valid"."<br>";
}
?>

<?php
# write a program to check a number is buzz or not
$num=20;
if($num%7==0 || $num%10==7)
{
    echo "Number is a buzz number";
}
else
{
    echo "Number is not a buzz number"."<br>";
}
?>

<?php
#write a program to check a number is binary or not
$num=1;
if($num==0 || $num==1)
{
    echo "Number is binary";
}
else
{
    echo "Number is not binary"."<br>";
}

?>
