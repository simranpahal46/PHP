<?php
#switch case write a program to print day of week using switch case 
$day=4;
switch($day)
{
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}
?>

<?php
# write a program to check number is even or odd, positive or negative, buzz number or not, binary number or using switch case
$num=6;
$ch=9;
switch($ch)
{
    case 1:
        if($num%2==0){
            echo "Number is even";
        }
        else{
            echo "number is odd";
        }
 break;
        case 2:
            if($num<0){
                echo "Number is negative";
            }
            else if($num>0){
                echo "number is postive";
            }
            else{
                echo "number is zero";
            }
            break;

            case 3:
                if($num%7==0 || $num%10==7)
                    {
                        echo "Number is buzz";
                    }
                    else{
                        echo "Number is not a buzz";
                    }
                    break;

                    case 4:
                        if($num==0 || $num==1){
                            echo "number is binary";
                        }
                        else{
                            echo "Number is not binary";
                        }
                        break;

                        default:
                        echo "invalid case";
}
?>

<?php
# write a program to perform arithmetic operation using switch case
$a=7;
$b=8;
$c=4;
switch($c)
{
case 1:
    $c=$a+$b; 
    echo $c; 
break;

case 2:
    $c=$a-$b;
echo $c;
break;

case 3:
    $c=$a*$b;
echo $c;
break;

case 4:
    $c=$a/$b;
echo $c;
break;

case 5:
    $c=$a%$b;

default:
echo "Invalid case";

    }
?>

<?php
#loop -repetation of statement
?>

<?php
# write a program to print hello 5 times using while loop
$n=5;
$i=1;
while($i<=$n){
    echo "hello $i"."<br>";
    $i++."<br>";
}
?>

<?php
# write a program to print table of 7 using while loop
$n=7;
$i=1;
while($i<=10){
    echo $n*$i."<br>";
    $i++."<br>";
}
?>

<?php
# write a program to print factorial of 7 using while loop
$n=7;
$fact=1;
$i=$n;
while($i>=1){
    $fact=$fact*$i;
    $i--;
}
echo "Factorial is $fact"."<br>"
?>

<?php
# write a program to print even number from 1 to 40 using while loop
$n=40;
$i=1;
while($i<=$n){
    if($i%2==0){
        echo $i."<br>";
    }
    $i++;
}
?>

<?php
# write a program to print odd number from 1 to 40 using while loop
$n=40;
$i=1;
while($i<=$n){
    if($i%2!=0){
        echo $i."<br>";
    }
    $i++."<br>";
}
?>

<?php
# write a program to print sum of first 10 natural number using while loop
$n=10;
$i=1;
$sum=0;
while($i<=$n){
    $sum=$sum+$i;
    $i++;
}
echo "Sum is $sum";
?>

<?php
# write a program to print average of first 10 natural number using while loop
$n=10;
$i=1;
$sum=0;
while($i<=$n){
    $sum=$sum+$i;
    $i++;
    }
    $avg=$sum/$n;
echo "average is $avg"."<br>";
?>

<?php
# write a program to print sum of even number from 1 to 10 using while loop
$n=10;
$i=0;
$sum=0;
while($i<=$n){   
        if($i%2==0){
            $sum=$sum+$i;
        }
        $i++;
}
echo "sum of even num is $sum"."<br>"
?>

<?php
# write a program to print star pattern using while loop
# *
# **
# ***
# ****  
# *****
$i=1;
while($i<=5)
    {
        $j=1;
        while($j<=$i){
echo "*";
$j++;
        }
        echo "<br>";
        $i++;
} 
?>

<?php
# write a program to print number pattern using while loop
# 1
# 12
# 123
# 1234
# 12345
$i=1;
while($i<=5)
    {
        $j=1;
        while($j<=$i){
echo $j;
$j++;
        }
        echo "<br>";
        $i++;
} 
?>

<?php
# write a program to print number pattern using while loop
# 1
# 22
# 333
# 4444
# 55555
$i=1;
while($i<=5)
    {
        $j=1;
        while($j<=$i){
echo $i;
$j++;
        }
        echo "<br>";
        $i++;
} 
?>

<?php
# write a program to print star pattern using while loop
# *****
# ****
# ***
# **
# *
$i=5;
while($i>=1)
    {
        $j=1;
        while($j<=$i){
echo "*";
$j++;
        }
        echo "<br>";
        $i--;
} 
?>

<?php
# write a program to print number pattern using while loop
# 12345
# 1234
# 123
# 12
# 1
$i=5;
while($i>=1)
    {
        $j=1;
        while($j<=$i){
echo $j;
$j++;
        }
        echo "<br>";
        $i--;
} 
?>

<?php
// 55555
// 4444
// 333
// 22
// 1
$i=5;
while($i>=1)
    {
        $j=1;
        while($j<=$i){
echo $i;
$j++;
        }
        echo "<br>";
        $i--;
} 
?>

<?php
# 54321
# 4321
# 321
# 21
# 1
$i=5;
while($i>=1)
    {
        $j=$i;
        while($j>=1){
echo $j;
$j--;
        }
        echo "<br>";
        $i--;
} 
?>

<?php
# *
# **
# ***
# ****
# *****
# ****
# ***
# **
# *
$i=1;
while($i<=5)
    {
        $j=1;
        while($j<=$i){
echo "*";
$j++;
        }
        echo "<br>";
        $i++;
} 
$i=4;
while($i>=1)
    {
        $j=1;
        while($j<=$i){
echo "*";
$j++;
        }
        echo "<br>";
        $i--;
} 
?>

<?php
# write a program to check number is palidrome or not using while loop
$n=121;
$temp=$n;
$rev=0;
while(floor($n))
    {
        $rem=$n%10;
        $rev=$rev*10+$rem;
        $n=$n/10;
    }
    if($rev==$temp)
        {
            echo "number is palidrome";
        }
        else{
            echo "number is not palidrome";
        }
?>

<?php
# write a program to check number is armstrong or not using while loop
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





