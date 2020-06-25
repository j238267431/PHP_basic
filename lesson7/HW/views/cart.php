<?php
/** var [] $goods */
// var_dump($_SESSION['cart']);
?>

<h1>Cart</h1>
<?php foreach($_SESSION['cart'] as $key => $value) :?>
   <h3><?= $value['name'] . ' в корзине ' .  $value['qty'] ?> шт.</h3>
   <p>
      <a style="text-decoration:none" href="?p=item&a=addToCart&id=<?=$value['id']?>&flag=cart">+ add</a>
      <a style="text-decoration:none" href="?p=item&a=removeFromCart&id=<?=$value['id']?>&flag=cart">- remove</a>
   </p>
   
<?php endforeach; ?>

