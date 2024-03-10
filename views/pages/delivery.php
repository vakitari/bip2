<?php
$view->component('start')
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>

  <h2>История заказов</h2>

  <table>
    <tr>
      <th>Заказчик</th>
      <th>Товар</th>
      <th>Цена</th>
      <th></th>
    </tr>
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Centro comercial Moctezuma</td>
      <td>Francisco Chang</td>
      <td>Mexico</td>
    </tr>
    <?php for ($i = 0; $i < 3; $i++) { ?>

      <tr>
        <td>Имя пользования <?=$i ?></td>
        <td>Жопоглазки</td>
        <td>10000</td>
        <td><a href="" class="btn btn-danger">Отменить заказ</a></td>
      </tr>
    <?php } ?>


  </table>

</body>

</html>
<?php
$view->component('end')
?>