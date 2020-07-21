<?php 

$hello =  'привет';
if ($user['is_admin']){
   $hello =  'Вы зашли как администратор';
}

?>

<h2> <?=$hello .' '. $user['name'] ?></h2>
<?php if(!$user['is_admin']) :?>
   <p><a href="?p=cart&a=orders&user_id=<?= $user['id'] ?>">посмотреть свои заказы</a></p>
<?php endif ?> 
<a href="?p=login&a=logout">logout</a>
<?php ?>