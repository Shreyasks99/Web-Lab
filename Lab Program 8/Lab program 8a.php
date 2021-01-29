<html>
    <head>
    <style>
        table{
            margin:auto;
            background-color:silver;
            align:center;
        }
        input ,p{
            text-align:center;
        }
    </style>
    </head>
    <body>
        <form method="post" action="Lab Program 8.php">
            <table>
                <caption><h2>Simple Calculator</h2></caption>
                <tr>
                    <td>First Number:</td><td><input type="text" name="num1" /></td>
                    <td rowspan="2"><button type="submit" name="submit" value="calculate">Calculate</td>
                </tr>
                <tr>
                    <td>Second Number:</td><td><input type="text" name="num2" /></td>
                    <td rowspan="2"><input type="reset" name="clear" value="clear"></td>
                </tr>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if(is_numeric($num1) and is_numeric($num2)){
                echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td></tr>";
                echo "<tr><td> Subtraction :</td><td><p>".($num1-$num2)."</p></td></tr>";
                echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td></tr>";
                echo "<tr><td> Division :</td><td><p>".($num1/$num2)."</p></td></tr>";
                echo "</table>" ;
            }
            else{
                echo "<script> alert('Enter a valid number')</script>";
            }
        }
        ?>
    </body>
</html>
