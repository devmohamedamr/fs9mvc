<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <form action="postlogin" method="post">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>