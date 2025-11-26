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
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php
        // Your PHP logic goes here
    ?>

</body>
</html>
