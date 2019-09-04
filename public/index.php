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

        <header class="flex flex_align_center">

            <h2 class="header_h2">product catalog</h2>
            <input type="submit" name="mass_delete" value="delete checked" form="products">
            <a href="product.html">add product</a>

        </header>

        <main>

            <div class="wrapper">
            <form id="products" action="../private/mass_delete.php" method="post" class="flex_justify_center">
                <?php
                // Every time this page loads, class Render and the appropriate function for displaying current DB records is called.
                require_once('../private/classes/Render.php');
                $getProducts = new Render();
                $getProducts->displayData();
                ?>
            </form>
            </div>

        </main>

        <footer class="flex flex_align_center">

            <h3>&copy; 2019</h3>

        </footer>

    </body>

</html>
