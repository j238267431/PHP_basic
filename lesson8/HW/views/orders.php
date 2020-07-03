<?php while($row = mysqli_fetch_assoc($result)):?>
   <?php $items = json_decode($row['items'], true, JSON_UNESCAPED_UNICODE);?>
   <h2>номер заказа <?= $row['id'] ?></h2>
      <?php foreach ($items as $key => $value) :?>
         <p><?= $value['name'] . '  количество ' .  $value['qty'] . ' шт. ' ?></p>
      <?php endforeach; ?>

      <?php if(!$_SESSION['is_admin']) :?>
         <p><?= 'статус: ' .  $row['status']?></p>
      <?php endif ?>

<?php 
$ordered="";
$payed="";
$delivered="";

switch($row['status']){
   case "заказан":
      $ordered = "selected";
   break;
   case "оплачен":
      $payed = "selected";
   break;
   case "доставлен":
      $delivered = "selected";
   break;

}

?>
   <?php if($_SESSION['is_admin']) :?>


         <form action="?p=orders&a=changeStatus&order_number=<?=$row['id']?>" method="post">
            <select name="select">
               <option <?= $ordered ?>>заказан</option>
               <option <?= $payed ?>>оплачен</option>
               <option <?= $delivered ?>>доставлен</option>
            </select>
            <input type="submit" value="изменить статус">     
         </form>
      <?php endif ?>
      <hr>

<?php endwhile; ?>



