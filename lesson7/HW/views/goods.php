<?php
/** var [] $goods */
?>
<h1>Goods</h1>
<?php while($row = mysqli_fetch_assoc($result)) :?>
   <h2><?= $row['name'] ?></h2>
    <p><a href="?p=item&a=show&id=<?= $row['id'] ?>">Подробнее</a></p>
<?php endwhile;?>
