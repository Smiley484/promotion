<?php
/**
 * author: svejge
 * date: 07.06.2019
 */

    if (count($_POST)==1 && $_POST['nav'] == 'project') {
        header('Location: https://www.google.ch'); //ÄNDERN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    } elseif (count($_POST) == 0) {
        $_POST['nav'] = 'home';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Promotion TDM</title>
        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
    </head>
    <body>
    <nav>
        <div class="nav-div">
            <form action="" method="post">
                <img src="img/logo.png" alt="Logo from ToDo-Management">
                <?php if(count($_POST) == 1 && $_POST['nav'] == 'home') : ?>
                    <button type="submit" class="btn btn-primary" name="nav" value="home" id="home" disabled>Home</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="nav" value="home" id="home">Home</button>
                <?php endif;?>
                <?php if(count($_POST) == 1 && $_POST['nav'] == 'about') : ?>
                    <button type="submit" class="btn btn-primary" name="nav" value="about" id="about" disabled>About us</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="nav" value="about" id="about">About us</button>
                <?php endif;?>
                <button type="submit" class="btn btn-primary" name="nav" value="project" id="project">Start NOW!</button>
            </form>
        </div>
    </nav>
    <?php if ((count($_POST) == 1 && $_POST['nav'] == 'home') || count($_POST) == 0):
        include 'home.php';
    elseif (count($_POST) == 1 && $_POST['nav'] == 'about'):
        include "about.php";
    endif; ?>

    </body>
</html>