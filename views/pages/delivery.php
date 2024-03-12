<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\DataBase\DataBase $db
 */
$user = $auth->user();
$view->component('start')
?>

  <h2>История заказов</h2>

  <table>
    
    <?php foreach ($db->get('delivery',['user_id' => $user->id()]) as $value) {  ?>

      <tr>
        <td>Имя пользования <?= $user->username() ?></td>
        <td>Название <?= $db->first('product', ['id' => $value['product_id']])['title']; ?></td>
        <td>Количество <?= $value['qtyBuy'] ?> </td>
        <td>цена <?= $value['fPrice'] ?> </td>
        <td><?php if ($value['dost'] == 1) {
          echo "самовывоз";
        } else echo "Доставка по адресу ". $value['dost'] ?> </td>
        <td><a href="/bas/deleteDel/?id=<?php echo $value['id']; ?>" class="btn btn-danger">Отменить заказ</a></td>
      </tr>
    <?php } ?>


  </table>

<?php
$view->component('end')
?>