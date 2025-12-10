<?php
<<<<<<< HEAD
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

// get basic table counts using PDO from db.php
$stats = [];
$tables = ['theatre', 'auditorium', 'seat', 'movie', 'showtime', 'customer', 'ticket'];

foreach ($tables as $table) {
    $stmt = $pdo->query("SELECT COUNT(*) AS c FROM {$table}");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats[$table] = (int)($row['c'] ?? 0);
=======
// connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "theatre_booking";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// function to count rows in a table
function countRows($conn, $table) {
    $sql = "SELECT COUNT(*) AS c FROM $table";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        return $row['c'];
    }
    return 0;
>>>>>>> 613ff15fa4864033a1c7b9296ba6bf354271e6c4
}
?>
<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <title>Theatre Booking – Home</title>
=======
    <title>Theatre Booking</title>
>>>>>>> 613ff15fa4864033a1c7b9296ba6bf354271e6c4
</head>
<body>

<h1>Theatre Booking – Part C</h1>

<h2>Navigation</h2>
<ul>
    <li><a href="movies.php">Browse Movies</a></li>
    <li><a href="showtimes.php">Showtime Finder</a></li>
    <li><a href="my_tickets.php">My Tickets</a></li>
    <li><a href="reports.php">Reports</a></li>
</ul>

<hr>

<h2>Database Status</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Table</th>
        <th>Rows</th>
    </tr>
    <tr>
        <td>theatre</td>
<<<<<<< HEAD
        <td><?php echo $stats['theatre']; ?></td>
    </tr>
    <tr>
        <td>auditorium</td>
        <td><?php echo $stats['auditorium']; ?></td>
    </tr>
    <tr>
        <td>seat</td>
        <td><?php echo $stats['seat']; ?></td>
    </tr>
    <tr>
        <td>movie</td>
        <td><?php echo $stats['movie']; ?></td>
    </tr>
    <tr>
        <td>showtime</td>
        <td><?php echo $stats['showtime']; ?></td>
    </tr>
    <tr>
        <td>customer</td>
        <td><?php echo $stats['customer']; ?></td>
    </tr>
    <tr>
        <td>ticket</td>
        <td><?php echo $stats['ticket']; ?></td>
=======
        <td><?php echo countRows($conn, "theatre"); ?></td>
    </tr>
    <tr>
        <td>auditorium</td>
        <td><?php echo countRows($conn, "auditorium"); ?></td>
    </tr>
    <tr>
        <td>seat</td>
        <td><?php echo countRows($conn, "seat"); ?></td>
    </tr>
    <tr>
        <td>movie</td>
        <td><?php echo countRows($conn, "movie"); ?></td>
    </tr>
    <tr>
        <td>showtime</td>
        <td><?php echo countRows($conn, "showtime"); ?></td>
    </tr>
    <tr>
        <td>customer</td>
        <td><?php echo countRows($conn, "customer"); ?></td>
    </tr>
    <tr>
        <td>ticket</td>
        <td><?php echo countRows($conn, "ticket"); ?></td>
>>>>>>> 613ff15fa4864033a1c7b9296ba6bf354271e6c4
    </tr>
</table>

</body>
</html>
