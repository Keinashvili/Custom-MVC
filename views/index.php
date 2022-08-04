<?php use app\core\HomeClass;

include_once 'includes/header.php'; ?>
<link rel="stylesheet" href="css/index.css">
    <header>
        <h1 class="title">Products List</h1>
        <div class="blank"></div>
        <a class="add-btn" href="/add_product">ADD</a>
        <button id="delete-product-btn" form="products-form">MASS DELETE</button>
    </header>
    <hr class="lines">
    <div class="container">
        <div class="wrapper">
            <form action="/remove-product" id="products-form" method="post">
                <div class="items">
                    <?php foreach ($products as $product) : ?>
                        <div class = "product">
                            <input class="delete-checkbox" type="checkbox" name="ids[]" value="<?php echo $product->id ?>">
                            <div class = "product-content">
                                <h2 class = "product-name"><?php echo $product->sku ?></h2>
                                <h2 class = "product-category"><?php echo $product->name ?></h2>
                                <h2 class = "product-price">$<?php echo number_format($product->price, 2) ?></h2>
                                <?php
                                $text = match ($product->value) {
                                    'Kg' => 'Weight:',
                                    'HxWxL' => 'Dimensions:',
                                    default => 'Size:',
                                };
                                ?>
                                <h2 class ='product-dimensions'><?php echo $text . ' ' . $product->size.$product->value ?></h2>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </form>
        </div>
    </div>

<?php
include_once 'includes/footer.php'; ?>