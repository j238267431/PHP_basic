<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
</head>
<body>
   
   <li><a href="?p=goods">посмотреть все товары</a></li>
    <li><a href="?p=orders&a=getUserOrders">посмотреть заказы пользователей</a></li>
    <li><a href="?p=login">вход в личный кабинет</a></li>
    <p style = "color:red;"><?= $msg ?></p>
   <?= $content ?>

</body>
</html>