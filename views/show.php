<?php
/* @var $products */
?>
<form action="/delete/<?= $products['id'] ?>" method="post">
    <button type="submit">submit</button>
    <?= " ". $products['title'] ?>
</form>