<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$string = "Hello World";

$sql = "SELECT LENGTH('$string') AS length_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "1. LENGTH() : " . $row["length_func"] . "<br>";

$sql = "SELECT CONCAT('$string', ' - PHP') AS concat_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "2. CONCAT() : " . $row["concat_func"] . "<br>";

$sql = "SELECT CONCAT_WS(' ', '$string', 'Using', 'MySQL') AS concat_ws_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "3. CONCAT_WS() : " . $row["concat_ws_func"] . "<br>";

$sql = "SELECT TRIM('   $string   ') AS trim_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "4. TRIM() : " . $row["trim_func"] . "<br>";

$sql = "SELECT LTRIM('   $string') AS ltrim_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "5. LTRIM() : " . $row["ltrim_func"] . "<br>";

$sql = "SELECT RTRIM('$string   ') AS rtrim_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "6. RTRIM() : " . $row["rtrim_func"] . "<br>";

$sql = "SELECT LPAD('$string', 15, '*') AS lpad_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "7. LPAD() : " . $row["lpad_func"] . "<br>";

$sql = "SELECT RPAD('$string', 15, '*') AS rpad_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "8. RPAD() : " . $row["rpad_func"] . "<br>";

$sql = "SELECT LOCATE('o', '$string') AS locate_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "9. LOCATE() : " . $row["locate_func"] . "<br>";

$sql = "SELECT INSTR('$string', 'World') AS instr_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "10. INSTR() : position = " . $row["instr_func"] . "<br>";

$sql = "SELECT SUBSTR('$string', 1, 5) AS substr_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "11. SUBSTR() : " . $row["substr_func"] . "<br>";

$sql = "SELECT LCASE('$string') AS lcase_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "12. LCASE() : " . $row["lcase_func"] . "<br>";

$sql = "SELECT UCASE('$string') AS ucase_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "13. UCASE() : " . $row["ucase_func"] . "<br>";

$sql = "SELECT REPEAT('$string ', 2) AS repeat_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "14. REPEAT() : " . $row["repeat_func"] . "<br>";

$sql = "SELECT REPLACE('$string', 'World', 'PHP') AS replace_func";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "15. REPLACE() : " . $row["replace_func"] . "<br>";

mysqli_close($conn);
?>
