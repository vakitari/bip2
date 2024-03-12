<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\Auth\Auth $auth
 * @var \App\Kernel\DataBase\DataBase $db
 */
$user = $auth->user();
$view->component('start')

?>

<h1 style="text-align: center;">Корзина</h1>
<?php if (!$db->get('basket', ['user_id' => $user->id()]) == null) { ?> 

<?php foreach ($db->get('basket', ['user_id' => $user->id()]) as $value) { 
  $product = $db->get('product', ['id' => $value['product_id']])
  ?> 
<div class="buy-div">
  <div class="buyMini">
    <img src="<?php echo $storage->url($product[0]['avatar']); ?>" alt="12312">
    <div class="buyInf">
      <p> Время доставки: по городу 40мин, за городом 1ч 20мин~ </p>
      <p> Оплата: на месте картой или наличными</p>
      <p> 123123</p>
    </div>
  </div>
  <div>
    <div class="a_buy">
      <div>
        <p>название: <?php echo $product[0]['title'] ?></p>
        <p>цена:10000</p>
        <p>кол-во цветов: 10</p>
      </div>
      <div class="p_b">

        <a href="/bas/buyFlow/?id=<?php echo $product[0]['id']?>" class="btn btn-outline-success" type="button" >Заказать </a>
        <a href="/bas/delBas/?id=<?php echo $value['id']?>" class="btn btn-outline-success" type="button" >Удалить из корзины</a>
      </div>
    </div>
  </div>
</div><?php
} } else echo "Корзина пуста"; ?>

<?php
$view->component('end')

?>