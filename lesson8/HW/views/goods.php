<?php
/** var [] $goods */
?>
<h1>Goods</h1>
<?php while($row = mysqli_fetch_assoc($result)) :?>
   <h2><?= $row['name'] ?></h2>
   <?php if(!$_SESSION['is_admin']) :?>
        <p><a href="?p=item&a=show&id=<?= $row['id'] ?>">Подробнее</a></p>
    <?php endif ?>
    <?php if($_SESSION['is_admin']) :?>
        <a href="?p=goods&a=delete&id=<?= $row['id'] ?>">удалить</a>
    <?php endif ?>
<?php endwhile;?>
<?php if($_SESSION['is_admin']) :?>
    <p><a href="?p=goods&a=showForm">добавить товары</a></p>
<?php endif ?>
