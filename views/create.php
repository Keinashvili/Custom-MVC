
<form action="/insert" method="post">
    <input type="text" name="title" id="title"> title | <?php error('title'); ?>
    <br>
    <input type="text" name="price" id="price"> price | <?php error('price'); ?>
    <br>
    <input type="text" name="list_price" id="list_price"> list_price
    <br>
    <button type="submit">submit</button>
</form>