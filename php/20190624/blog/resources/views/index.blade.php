<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col">
        <h1>Day la view - index </h1>
    </div>
</div>
<div class="row  bg-success py-2">
    <div class="col">
    <table style="width:100%;">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>name</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>

        <?php
// var_dump($nguoi_dung);

for ($i = 0; $i < count($nguoi_dung); $i++) {
    ?>

        <tr>
            <th> <?php echo $nguoi_dung[$i]->id ?> </th>
            <td> <?php echo $nguoi_dung[$i]->name ?> </td>
            <td> <?php echo $nguoi_dung[$i]->email ?> </td>
            <td> <?php echo $nguoi_dung[$i]->password ?> </td>
        </tr>
<?php
}
?>



    </tbody>
</table>
    </div>
</div>

</div>

</body>
</html>