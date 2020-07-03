<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/** var [] $goods */
// var_dump($_SESSION['cart']);
?>
<div id = "app">
<h1>Cart</h1>
<?php 
    if(empty($result)){
        return;
    }
 foreach($result as $key => $value) :?>
   <h3><?= $value['name'] . ' в корзине ' .  $value['qty'] ?> шт.</h3>
   <p>
      <a style="text-decoration:none" href="?p=item&a=addToCart&id=<?=$value['id']?>">+ add</a>
      <a style="text-decoration:none" href="?p=item&a=removeFromCart&id=<?=$value['id']?>">- remove</a>
   </p>
   
<?php endforeach; ?>

<a style="cursor: pointer" href="?p=item&a=makeorder">оформить заказ</a>

<!-- <p style="cursor: pointer" @click="addGood">оформить заказ</p>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            goodsId: '<?= getId() ?>'
        },
        methods: {
            addGood() {
                let form = new FormData();
                form.append('goodId', this.goodsId);
                axios.post(
                    '?p=item&a=makeorder',
                    form
                ).then(function (response) {   
                   console.log(response);

                });
            }
        }
    }) -->
</script>


