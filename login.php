

    <?php
$conn = new mysqli("localhost", "root", "", "coffeshopp");

// Step 2: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Step 3: Get form data
$username = $_POST['username'];
$pass = $_POST['passwor'];



$sql = "SELECT * FROM user WHERE username = '$username' AND  password = '$pass'  " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("location:index.html");
} else {
    echo "Invalid username or password.";
}

$conn->close();


    ?>








