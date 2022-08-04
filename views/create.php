<?php include_once 'includes/header.php'; ?>
    <link rel="stylesheet" href="css/add_product.css">
    <body>
    <!--Header -->
    <header>
        <h1 class="title">Product Add</h1>
        <div class="blank"></div>
        <button class="save-btn" type="submit" form="product_form">SAVE</button>
        <a class="cancel-btn" href="/">CANCEL</a>
    </header>
    <hr class="lines"/>
    <div class="form-container">
        <form method="post" id="product_form" action="/insert">
            <div class="cus-input">
                <label for="title">SKU</label>
                <input type="text" id="title" name="title">
            </div>
            <p class="errors"><?php error('title'); ?></p>
            <div class="cus-input">
                <label for="name">Name</label>
                <input type="text" id="list_price" name="list_price">
            </div>
            <?php error('list_price'); ?>
            <div class="cus-input">
                <label for="price">Price ($)</label>
                <input type="text" id="price" name="price">
            </div>
            <p class="errors"><?php error('price'); ?></p>
            <!-- Type Switcher -->
        </form>
    </div>
    <!-- Footer -->
    <footer>
        <hr class="lines"/>
        <p>Developed by Vladimer Keinashvili
            <br>Made for Scandiweb assigment
        </p>
    </footer>
    </body>
    </html>

<?php session_destroy(); ?>