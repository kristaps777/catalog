<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!-- Favicon link -->
        <link rel="shortcut icon" href="#">
         <!-- CSS link -->
        <link rel="stylesheet" href="styles/index.css">
        <title>catalog</title>
    </head>

    <body>

        <header>

            <h2>product catalog</h2>
            <input type="submit" name="mass_delete" value="delete checked" form="products">

        </header>

        <main>

            <div class="wrapper">
            <form id="products" action="../private/mass_delete.php" method="post">
                <?php
                require_once('../private/classes/Connect.php');
                $getProducts = new Connect();
                $getProducts->getData();
                ?>
            </form>
            </div>

        </main>

        <footer>

            <h3>&copy; 2019</h3>

        </footer>

    </body>

</html>
