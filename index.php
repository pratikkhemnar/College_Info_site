<?php
$insert=false;
if (isset($_POST['name'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kjcoemr";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $Gender = $_POST['Gender'];
    $other = $_POST['other'];

    $sql = "INSERT INTO student (Name, Age, Email, Number, Gender, Other) VALUES ('$name', '$age', '$email', '$number', '$Gender', '$other')";

    if ($conn->query($sql) == true) {
        // echo "Successfully inserted";
		$insert= true;

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php file</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index.php">
</head>
<body>
    
    <img class="img" src="campus.jpg" alt="KJCOEMR" srcset="">
    <img class="logo" src="logo.jpg" alt="logo">
    <div class="container">
        <h1 class="h1">WELCOME TO KJCOEMR COLLEGE INFORMATION SITE.</h1>
        <P class="p">This site provide you all information of kjcoemr college.Thanks for visit !</P>
		<?php
		if($insert==true){
			echo "<p class='submsg'>Thank You for Responsing !</p>";
		}
		?>
    <form class="form" action="index.php" method="post">

        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="email" name="email" id=""placeholder="Enter your email">
        <input type="number" name="number" placeholder="Enter your number">
        <select name="Gender" id="">
            <option value="gender">Enter Gender</option>
            <option value="Mail">Male</option>
            <option value="female">Female</option>
        </select>
        <textarea name="other" id="" cols="20px" rows="5" placeholder="Enter other info"></textarea><br>
        <button class="btn">Submit</button>
		
	
	</form>
    </div>
</body>
</html>
