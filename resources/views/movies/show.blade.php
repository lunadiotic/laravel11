<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Show</title>
</head>
<body>
    <ul>
        <?php foreach($menu as $key => $value): ?>
            <li><a href="<?= $value ?>"><?= $key ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h1>Movie</h1>
    {{ dd($movie) }}
</body>
</html>
