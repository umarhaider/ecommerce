$sql = "SELECT contactid, name, email FROM contacts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
echo $row["contactid"] . ", " . $row["name"] . ", " . $row["email"] . "<br>";
}
}
mysqli_close($conn);