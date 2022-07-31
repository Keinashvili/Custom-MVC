<?php
/* @var $products */
?>
<?php foreach ($products as $product) :?>

    <a href="/show/<?= $product->id ?>"><?= $product->title ?></a>            <a href="/edit/<?= $product->id ?>">edit</a> <?= $product->price ?> <?= $product->list_price ?>
    <br>

<?php endforeach;?>