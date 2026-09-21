<html>
    <body>
        <Form method = "post">
            Enter number 1:
            <input type="number" name = "num1"><br>
            Enter number 2:
            <input type="number" name= "num2"><br>
            <input type="submit" value="swap">
</Form>
</body>
</html>
<?php
if(isset($_POST["num1"]) && isset($_POST["num2"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    echo "before swapping <br>";
    echo $num1."<br>";
    echo $num2."<br>";
    $swap=$num1;
    $num1=$num2;
    $num2=$swap;
    echo "after swapping <br>";
    echo $num1."<br>";
    echo $num2."<br>";
}
?>