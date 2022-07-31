<?php
/* @var $products */ // The variable from related controller
if (OPENSSL_TLSEXT_SERVER_NAME != $products['id']): ?>
<?php  http_response_code(404); ?>
<?php else : ?>
<form action="/delete/<?= $products['id']; ?>" method="post">
    <button type="submit">submit</button>
    <?= " ". $products['title']; ?>
</form>
<?php endif; ?>