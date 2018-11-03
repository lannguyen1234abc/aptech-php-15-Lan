<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <h1 class="text-center"> Users </h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Password </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                foreach($users as $user){
                    echo "<tr>";
                    echo "<td> $user->id </td>";
                    echo "<td> $user->name </td>";
                    echo "<td> $user->email </td>";
                    echo "<td> $user->password </td>";
                    echo "<td>
                            <button> Show </button> 
                            <button> Edit </button> 
                            <button> Delete </button>  
                        </td>";
                    echo "</tr>";
                }
            ?>
            
        </tbody>
    </table>
</div>
</body>
</html>