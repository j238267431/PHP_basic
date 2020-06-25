<?php
/** var [] $goods */
?>


<h2><?= $_SESSION['item']['id']['name']?></h2>
<p><?= $_SESSION['item']['id']['info']?></p>
<p><a href="?p=item&a=addToCart&id=<?= $_SESSION['item']['id']['id'] ?>">add to cart</a></p>
<p><a href="?p=item&a=removeFromCart&id=<?= $_SESSION['item']['id']['id'] ?>">remove from cart</a></p>


