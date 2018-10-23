<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>
    <div class="container">
    <?php
    $data = [
        [
            'type' => 'iphone',
            'property' => [
                'price' => 100,
                'size' => 6.5,
                'ram' => '2 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
        [
            'type' => 'ipad',
            'property' => [
                'price' => 190,
                'size' => 7.9,
                'ram' => '4 GB',
                'made' => [
                    'by' => 'California',
                    'in' => 'China',
                ],
            ],
        ],
    ];
    ?>
    <table class="table">
        <thead>
            <tr>
        <th>#</th>
        <th>Type</th>
        <th>Price</th>
        <th>Made In</th>
            </tr>
    </thead> 
    <tbody>
    <?php
    $datalength = count($data);
     for ( $i=0; $i < $datalength; $i++){
         echo "
        <tr>
        <th> $i </th>
        <td> ".$data[$i]['type']." </td>
        <td> ".$data[$i]['property']['price']." </td>
        <td> ".$data[$i]['property']['made']['in']." </td>
        </tr> ";
     }
     ?>
    </tbody>
    </table> 
    </div>
</body>
</html>
