<!-- 

// $servername = "eu-cdbr-west-02.cleardb.net";
// $username = "b9b05c349b0b76";
// $password = "b93e67c4";
// $database = "it";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
//     $conn->query("SET NAMES utf8");
//     $conn->query("SET CHARACTER SET utf8");

 -->

<?php
$i++;
$cfg["Servers"][$i]["host"] = "eu-cdbr-west-02.cleardb.net"; //provide hostname
$cfg["Servers"][$i]["user"] = "b9b05c349b0b76"; //user name for your remote server
$cfg["Servers"][$i]["password"] = "b93e67c4"; //password
$cfg["Servers"][$i]["auth_type"] = "config"; // keep it as config


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

