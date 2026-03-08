<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    if (empty($name)) {
        $message = "Please enter your name.";
    } else {
        $message = "Hello, " . htmlspecialchars($name) . "!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP and JavaScript Practical</title>

<script>

function calculateSum() {

    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);

    var sum = num1 + num2;

    alert("The sum is: " + sum);
}

function changeColor() {
    document.getElementById("text").style.color = "red";
}

</script>

</head>

<body>

<h2>PHP Greeting Form</h2>

<form method="POST">
    Enter your name:
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<p><?php echo $message; ?></p>

<hr>

<h2>JavaScript Sum Function</h2>

<input type="number" id="num1" placeholder="First number">
<input type="number" id="num2" placeholder="Second number">

<button onclick="calculateSum()">Calculate Sum</button>

<hr>

<p id="text">This paragraph will change color.</p>

<button onclick="changeColor()">Change Paragraph Color</button>

</body>
</html>
