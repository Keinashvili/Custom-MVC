<?php
/* @var $products */
?>
<form action="/update/<?= $products['id']; ?>" method="post">
    <input type="text" name="title" id="title" value="<?= $products['title'] ?>"> title
    <br>
    <input type="text" name="price" id="price" value="<?= $products['price'] ?>"> price
    <br>
    <input type="text" name="list_price" id="list_price" value="<?= $products['list_price'] ?>"> list_price
    <br>
    <button type="submit">submit</button>
</form>
