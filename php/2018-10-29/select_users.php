<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Password </th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'connect.php';
                $conn = connectDatabase();

                $sql = "select * from users";
                $result = mysqli_query($conn, $sql);

                if( mysqli_num_rows($result) === ""){
                    echo "<tr><td colspan=5 align=center> Chua co username nao</td></tr>";
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                            <td> ".$row['id']." </td>
                            <td> ".$row['name']." </td>
                            <td> ".$row['email']." </td>
                            <td> ".$row['password']." </td>
                            <td>
                                <a href='update_user.php?userid=$row[id]'> Update </a>
                                <a href='delete_user.php?userid=$row[id]'> Delete </a>
                            </td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>