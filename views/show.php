<?php
/* @var $products */ // The variable from related controller
// if an id from url doesn't exist in related
// table (in that case products table) server
// response code is being set to 404
if (OPENSSL_TLSEXT_SERVER_NAME != $products['id']): ?>
<?php  http_response_code(404); ?>
<?php else : ?>
<form action="/delete/<?= $products['id']; ?>" method="post">
    <button type="submit">submit</button>
    <?= " ". $products['title']; ?>
</form>
<?php endif; ?>