<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <form method="GET">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>

            <select name="operation">
                <option value="select" selected> select </option>
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (*)</option>
                <option value="div">Division (/)</option>
            </select>

            <button type="submit">Calculate</button>
        </form>

        <?php   

        if (isset ($_GET["num1"]) && isset($_GET["num2"]) && isset ($_GET["operation"])) {

            $number_one = $_GET["num1"]; 
            $number_two = $_GET["num2"];
            $operation  = $_GET["operation"]; 

            switch ($operation){

                case "add":
                    echo "<h2> the summation of $number_one and $number_two = " . ($number_one + $number_two) . "</h2>";
                    break;

                case "sub":
                    echo "<h2> the subtraction of $number_one and $number_two = " . ($number_one - $number_two) . "</h2>";
                    break;

                case "mul":
                    echo "<h2> the multiplication of $number_one and $number_two = " . ($number_one * $number_two) . "</h2>";
                    break;

                case "div":
                    if ($number_two != 0)
                        echo "<h2> the division of $number_one and $number_two = " . ($number_one / $number_two) . "</h2>";
                    else 
                        echo "<h2> undefined because division by zero is impossible</h2>";
                    break;

                default:
                    echo "<h2>Please choose a valid operation.</h2>";
            }
        }

        ?>

    </body>
</html>
