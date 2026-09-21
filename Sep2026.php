<html>
    <body>
        <Form method="post">
            Enter the number:
            <input type="number" name="number">
            <input type="submit" value="submit">

</Form>
</body>
</html>
<!-- <?php
 # number is even or odd
if($_POST)
    {
    $number=$_POST["number"];
    if($number%2==0)
        {
            echo "$number is even number";
        }
    else{
        echo "$number is a odd number";
    }
    }
?> -->

<!-- <?php
 # numer is spy or not
 if($_POST)
    {
    $number=$_POST["number"];
    $sum=0;
    $prod=1;
    $n=$number;
    while(floor($n)){
        $rem=$n%10;
        $sum=$sum+$rem;
        $prod=$prod*$rem;
        $n=($n/10);
    }
    if($sum==$prod){
        echo "$number is spy number";
    }
    else{
        echo "$number is not spy number";
    }
    }
?> -->

<!-- <?php
# year is  leap year or not leap year
if($_POST)
    {
    $year=$_POST["number"];
    if($year%4==0 && $year%100!=0 || $year%400==0)
        {
            echo "$year is leap year";
        }
    else{
        echo "$year is not leap year";
    }
    }
?> -->

<!-- <?php
# number is buzz number or not
if($_POST)
    {
    $number=$_POST["number"];
    if($number%7==0 || $number%10==7)
        {
            echo "$number is buzz number";
        }
    else{
        echo "$number is not buzz number";
    }}
?> -->

<?php
#number is palidrome or not
if($_POST)
    {
    $number=$_POST["number"];
    $n=$number;
    $rev=0;
    while(floor($n)){
        $rem=$n%10;
        $rev=$rev*10+$rem;
        $n=($n/10);
    }
    if($number==$rev){
        echo "$number is palidrome number";
    }
    else{
        echo "$number is not palidrome number";
    }
}
?>







