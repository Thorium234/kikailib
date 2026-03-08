<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $length = $_POST["length"];
    $width = $_POST["width"];

    if ($length != "" && $width != "") {
        $area = $length * $width;
        $result = "The area of the rectangle is " . $area;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP and JavaScript Practical</title>

<script>

function checkNumber() {

    var number = document.getElementById("number").value;

    if(number % 2 == 0){
        alert(number + " is Even");
    }else{
        alert(number + " is Odd");
    }

}

function changeBackground(){
    document.body.style.backgroundColor = "lightblue";
}

</script>

</head>

<body>

<h2>Rectangle Area Calculator</h2>

<form method="POST">

Length:
<input type="number" name="length" required>

Width:
<input type="number" name="width" required>

<button type="submit">Calculate Area</button>

</form>

<p><?php echo $result; ?></p>

<hr>

<h2>Even or Odd Checker</h2>

<input type="number" id="number" placeholder="Enter a number">

<button onclick="checkNumber()">Check Number</button>

<hr>

<button onclick="changeBackground()">Change Background Color</button>

</body>
</html>
