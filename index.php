<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>John Snow</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
        <?php foreach($data as $key => $arraySection) {?>
        <section>
            <h1><?php echo $key ?></h1>
            <div class="cards">
                <?php foreach($data[$key] as $value) {?>
                    <figure>
                        <img src=<?php echo 'assets/images/' . $value['image'] ?> alt=<?php echo $value['location'] ?>>
                        <figcaption>
                            <div><?php echo $value['date'] ?></div>
                            <h2><?php echo $value['title'] ?></h2>
                            <p><?php echo $value['description'] ?></p>
                            <div><?php echo $value['location'] ?></div>
                        </figcaption>
                    </figure>
                <?php } ?>
            </div>
        </section>
        <?php } ?>
    </main>
</body>

</html>