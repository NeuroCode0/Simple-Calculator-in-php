# Simple-Calculator-in-php

It's stage 1 in your PHP language learning journey

project (2) :  Simple Calculator

Goal 

    Learn how to:
       1) How to create <form> in HTML (note : all information about html you can find it in html tutorial)
       2) Difference between GET and POST
       3)  How to receive data using $_GET or $_POST
       4) How to process numbers in PHP
       5) How to build logic using conditions
       6) How to print results dynamically


Requirement :

      You must use:
         1) Variables
         2) Conditions (if, elseif, else)
         3) Concatenation
         4) echo
         5) HTML form
         6) GET or POST method
         7) Basic validation (optional but recommended)


Task :

    Build a simple calculator using PHP + HTML forms.
    The user enters:
        First number
        Second number
        Operation (+, -, *, /)
    Then PHP processes the input and prints the result.


Topics :

Function :isset($variable)

     The isset() function in PHP is used to check whether a variable exists 
      AND is not assigned the value null.

     Syntax:
        isset($var1, $var2, ...)

     Returns:
        - TRUE  : if all the variables exist and their value is NOT null
        - FALSE : if any variable:
                     does NOT exist, OR
                     is assigned the value null

     Important notes:
        - isset() returns TRUE for empty strings:
              $x = "";      → TRUE
        - isset() returns TRUE for zero:
              $x = 0;       → TRUE
        - isset() returns TRUE for false:
              $x = false;   → TRUE
        - isset() returns FALSE for:
              * undefined variable
              * variable with value null

     Examples:

        $name = "Rere";
        echo isset($name);   // TRUE

        $age = null;
        echo isset($age);    // FALSE

        echo isset($unknownVar); // FALSE (does NOT exist)

        $text = "";
        echo isset($text);   // TRUE (exists, even if empty)


$_GET[""]

     $_GET is a PHP superglobal variable.
      It is used to collect data sent through the URL (query string)
      using the HTTP GET method

     How it works:
        - When you send data inside the URL like:
            example.com/page.php?name=Rere&age=21

        - PHP automatically stores these values inside the $_GET array:
            $_GET["name"] : "Rere"
            $_GET["age"]  : "21"

     Syntax:
        $_GET["key"]

         "key" is the name of the parameter in the URL.

     Example:
        URL:
            page.php?city=London

        PHP:
            echo $_GET["city"]; 
        Output:
            London

     Important notes:
        - $_GET only works for data passed in the URL.
        - All data sent through $_GET is visible in the address bar.
        - It should NOT be used for sensitive information (passwords, etc.).
        - $_GET returns:
               string value  : if the parameter exists
               warning (undefined index) : if the parameter does NOT exist

     Safe usage:
        Always check if it exists using isset():

            if (isset($_GET["username"])) {
                echo $_GET["username"];
            } else {
                echo "No username provided.";
            }

     Summary:
        - $_GET collects URL parameters
        - Accessible as an associative array
        - Should be checked with isset() to avoid errors



$_POST[""]

     $_POST is a PHP superglobal used to collect form data sent
      through an HTTP POST request.

     When is $_POST used?
        - When submitting a form with method="POST"
        - When sending data securely (POST does not show data in the URL)
        - When handling login forms, registrations, uploads, etc.

     Syntax:
        $_POST["key"]

        # "key" must match the name attribute in the HTML form input.

     Example HTML form:
        <form method="POST">
            <input type="text" name="username">
            <input type="submit">
        </form>

     PHP example:
        $user = $_POST["username"];
        echo $user;

     Behavior:
        - If "username" exists in the form : returns its value
        - If it does NOT exist : causes a notice: "Undefined index"

     Key facts:
        * Data sent via POST is NOT visible in the URL
        * Supports large amounts of data (text, files, etc.)
        * Commonly used for forms that modify data (login, register, etc.)

     Security note:
        Always validate and sanitize $_POST data to avoid:
            - SQL injection
            - XSS attacks
            - Form manipulation

