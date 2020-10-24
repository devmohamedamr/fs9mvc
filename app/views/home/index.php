<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
<h1><?= $h1; ?></h1>
<ul>
<?php foreach($data as $d): ?>


    <li><?= $d['name']; ?></li>
    

<?php endforeach; ?>
</ul>  
</body>
</html>