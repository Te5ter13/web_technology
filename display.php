<h1>This is the Backend</h1>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Website</th>
        <th>Comment</th>
    </tr>
<?php
require_once 'connect.php';
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$stmt = $pdo->query('SELECT * FROM Information');
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr><td>' . $row['Name'] . '</td> ' . htmlentities($row['make']) . ' <td> ' . $row['Email'] .'</td>'.'<td>' .$row['Website'] . '<td>' .$row['Comment'].
    '</td></tr>';
                }
?>
</table>