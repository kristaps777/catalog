<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!-- Favicon link -->
        <link rel="shortcut icon" href="#">
         <!-- CSS link -->
        <link rel="stylesheet" href="styles/style.css">
        <title>Document</title>
    </head>

    <body>

        <header>

            <h2>product catalog</h2>

        </header>

        <main>

            <div class="wrapper">
                <?php
                require_once('../private/classes/Connect.php');
                $getProducts = new Connect();
                $getProducts->getData();
                ?>
            </div>

        </main>

        <footer>

            <h3>&copy; 2019</h3>

        </footer>

    </body>

</html>
