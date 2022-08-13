<?php
    $phones = [
        [
            'model' => 'iPhone8',
            'manufacturer' => 'Apple',
            'price' => 40000,
            'currency' => 'RUB',
            'left_in_stock' => 50
        ],
        [
            'model' => 'A20',
            'manufacturer' => 'Samsung',
            'price' => 30000,
            'currency' => 'RUB',
            'left_in_stock' => 60
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
</head>
<body>
    <?php $i = false; ?>
    <?php foreach($phones as $item):?>
        <table border = "1">
        <?php  if ($i == false):?>
            <tr>
                <?php foreach ($item as $key => $value): ?>
                    <th><?= $key; ?></th>
                    <?php endforeach; ?>
            </tr>  
            <tr>
                <?php foreach ($item as $key => $value): ?>
                    <th><?= $value ?></th>
                    <?php endforeach;  ?>
            </tr>
        <?php else:?>
            <tr>
                <?php foreach ($item as $key => $value): ?>
                    <th><?= $value ?></th>
                    <?php endforeach;  ?>
            </tr>
        <?php endif ?>  
        <?php $i = true; ?>            
        </table>
        
    <?php endforeach;  ?>
</body>
</html>




      