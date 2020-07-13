if (isset($_POST["submit"])) {
	//fetch the items to be searched
	$str = $_POST["search"];
	//connect to the database
	$conn = new mysqli($servername, $username, $password, $dbname);
	//check connection
	if ($conn->connect_error) {
		die("Connection Failed");
	}

	$sql = "SELECT ITEMS,FULL,HALF  FROM menu WHERE ITEMS REGEXP '^$str'";
	//execute query
	$result = $conn->query($sql);

	//check query execution
	if ($result->num_rows > 0) {
		//fetch the result in an array
		while ($row = $result->fetch_assoc()) {
            ?>
            



if ($conn->connect_error) {
	die("Connection Failed");
}
$sql = "SELECT ITEMS,FULL,HALF FROM menu ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
		//fetch the result in an array
		while ($row = $result->fetch_assoc()) {
			?>