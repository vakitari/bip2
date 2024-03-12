<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\DataBase\DataBase $db
 * @var \App\Kernel\Auth\Auth $auth
 */
$user = $auth->user();
$view->component('start')
?>

  <h2>История заказов</h2>

  <table>
<?php if (!$db->get('delivery',['user_id' => $user->id()]) == null) {  ?>
    <?php foreach ($db->get('delivery',['user_id' => $user->id()]) as $value) {  ?>

      <tr>
        <td>Имя пользования <?= $user->username() ?></td>
        <td>Название товара <?= $db->first('product', ['id' => $value['product_id']])['title']; ?></td>
        <td>Количество <?= $value['qtyBuy'] ?> </td>
        <td>цена <?= $value['fPrice'] ?> </td>
        <td><?php if ($value['dost'] == 1) {
          echo "самовывоз";
        } else echo "Доставка по адресу ". $value['dost'] ?> </td>
          <?php if ($user->role() != 1) { ?>
        <td><a href="/bas/deleteDel/?id=<?php echo $value['id']; ?>" class="btn btn-danger">Отменить заказ</a></td><?php }?>
      </tr>
    <?php } } else echo "Вы пока ничего не купили"?>


  </table>

<?php
$view->component('end')
?>