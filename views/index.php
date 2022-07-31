<?php
/* @var $products */
?>
<?php foreach ($products as $product) :?>

    <a href="/show/<?= $product->id ?>"><?= $product->title ?></a>
    <br>

<?php endforeach;?>