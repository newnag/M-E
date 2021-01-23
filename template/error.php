<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "template/mains/head-css.php"; #ส่วน <head> ของเว็บ ?>
</head>
<body>
    <div class="body container">
        <?php require_once "template/mains/nav-top.php"; ?>

        <main style="display: flex; height:500px">
            <div style="margin: auto;text-align:center;">
                <h1>ERROR404 ! </h1>
                <p>SORRY, PAGE WAS NOT FOUND</p>
            </div>
        </main>

        <?php require_once "template/mains/footer.php"; ?>
        <?php require_once "template/mains/script.php"; ?>
    </div>
</body>
</html>