<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

</head>
<body>
    
    
<?php
$p = [
["iphone", 1000],
["note9", 500],
["Huawei", 100]
];
?>

<table style="width:100%;">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
   
        <?php  
        $total = 0;
        for ($i = 0; $i < count($p) ; $i++) {  
            if ($p[$i][1] > 500) {
                $price = $p[$i][1] + ($p[$i][1] / 10);
              } else {
                $price = $p[$i][1] + ($p[$i][1] / 20);
              }
            ?>  
            <tr>
                <th> <?php echo $i+1 ?></th>
                <td> <?php echo $p[$i][0] ?></td>
                <td> <?php echo "$" . $price  ?> </td> 
            </tr>
            <?php    
            $total = $total + $price;
        } ?>  
            <!-- <tr>
                <td>1</td>
                <td> <?php echo $p[0][0] ?> </td>
                <td> <?php echo "$".$p[0][1] ?> </td>
            </tr>
            <tr>
                <td>2</td>
                <td> <?php echo $p[1][0] ?> </td>
                <td> <?php echo "$".$p[1][1] ?> </td>
            </tr>
            <tr>
                <td>3</td>
                <td> <?php echo $p[2][0] ?> </td>
                <td> <?php echo "$".$p[2][1] ?> </td>
            </tr>  -->
            <tr>
                <th>Total</th>
                <th colspan="2" style="text-align:right;"> <?php echo $total ?> </th>
            </tr>
    </tbody>
</table>

</body>
</html>