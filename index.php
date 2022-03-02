<?php
$con = mysqli_connect('your_host', 'db_user', 'db_pass', 'db_name');

function query($query)
{
    global $con;
    $result = mysqli_query($con, $query);
    $emptyarray = [];

    while ($datas = mysqli_fetch_assoc($result)) {
        $emptyarray[] = $datas;
    }

    return $emptyarray;
}

$query = query("SELECT * FROM demo");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Displaying in Database With PHP - Hamzah Saiful Madjid</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Order</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $data) : ?>
                <tr>
                    <td>1</td>
                    <td><?= $data["name"]; ?></td>
                    <td><?= $data['order']; ?></td>
                    <td><?= $data['date']; ?></td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>

</body>

</html>