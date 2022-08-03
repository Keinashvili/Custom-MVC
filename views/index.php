<?php
/* @var $products */
?>
<?php foreach ($products as $product) :?>

    <a href="/show/<?= $product->id ?>"><?= $product->title ?></a>            <a href="/edit/<?= $product->id ?>">edit</a> <?= $product->price ?> <?= $product->list_price ?>
    <br>


<?php endforeach;?>
<br>
<br>
<a href="/add">ADD</a>
<br>
<br>
<br>
<a href="/login">Login Page</a>
<br>
<a href="/register">Register Page</a>