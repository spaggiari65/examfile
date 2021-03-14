<?php

require_once "./conn.php";

$sql = "SELECT * FROM pizza WHERE pizzaCategory = 'meat'";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

$row = mysqli_num_rows($result);

if ($row) {
    $table =  "<table>
    <tr>
      <th>pizzaID</th>
      <th>pizzaName</th>
      <th>pizzaCategory</th>
      <th>pizzaPrice</th>
    </tr>";
    foreach ($rows as $key => $value) {
        $table .= "<tr>";
        foreach ($value as $data) {
            $table .= "<td>$data</td>";
        }
        $table .= "</tr>";
    }

    $table .= "</table>";

    echo $table;
} else {
    echo "No data in the table try again.";
}
