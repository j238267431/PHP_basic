<?php

$months = [
    'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь',
];

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div>
    <strong>Необходимо выбрать дату просмотра:</strong>
    <div>
        <!-- Выбор дня -->
        <select id="day">
            <?php $date = date('d'); ?>
            <?php foreach (range(1, date('t')) as $val) { ?>
                <?php $day = sprintf('%02d', $val); ?>
                <?php $selected = ($day == $date ? ' selected' : ''); ?>
                <option value="<?= $day ?>"<?= $selected ?>><?= $day ?></option>
            <?php } ?>
        </select>

        <!-- Выбор месяца -->
        <select id="month">
            <?php $date = date('m'); ?>
            <?php foreach (range(1, 12) as $val) { ?>
                <?php $day = sprintf('%02d', $val); ?>
                <?php $selected = ($day == $date ? ' selected' : ''); ?>
                <option value="<?= $day ?>"<?= $selected ?>><?= $months[--$val] ?></option>
            <?php } ?>
        </select>

        <!-- Выбор года -->
        <select id="year">
            <?php $date = date('Y'); ?>
            <?php foreach (range(1996, 2020) as $val) { ?>
                <?php $selected = ($val == $date ? ' selected' : ''); ?>
                <option value="<?= $val ?>"<?= $selected ?>><?= $val ?></option>
            <?php } ?>
        </select>
    </div>
</div>
</body>

</html>