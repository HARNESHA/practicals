<?php
//These are the defined authentication environment in the db service
// The MySQL service named in the docker-compose.yml.
$host = '172.21.0.2';
// Database use name
$user = 'test_user';
//database user password
$pass = 'Simform@123';
// check the MySQL connection status
//$conn = new mysqli($host, $user, $pass);
$conn = mysqli_connect("172.21.0.2","test_user","Simform@123","test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
    echo "<br>";
}
if ($result = mysqli_query($conn, "SELECT * FROM users")) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    echo "<br>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["id"]. " - Name: " . $row["username"]. " -password " . $row["password"]. "<br>";
        }
      } else {
        echo "0 results";
      }
  }
?>