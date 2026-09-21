<html>
    <body>
        <Form method="post">
            Enter number 1 :
            <input type="number" name="num1"><br>
             Enter number 2 :
            <input type="number" name="num2"><br><br>

            <input type="submit" name="sum" value="Sum">
            <input type="submit" name="sub" value="subtraction">
            <input type="submit" name="mul" value="multiplication">
</Form>
</body>
</html>

<?php
if(isset($_POST["num1"]) && isset($_POST["num2"]))
    {
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
    }
        if(isset($_POST["sum"]))
            {
                $result=$num1+$num2;
                echo $result;
            }
        if(isset($_POST["sub"]))
            {
                $result=$num1-$num2;
                echo $result;
            }
        if(isset($_POST["mul"]))
            {
                $result=$num1*$num2;
                echo $result;
            }

        

    
?>
