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
  $product = $db
  ?> 
<div class="buy-div">
  <div class="buyMini">
    <img src="views/components/img/Rectangle.png" alt="12312">
    <div class="buyInf">
      <p> Время доставки: по городу 40мин, за городом 1ч 20мин~ </p>
      <p> Оплата: на месте картой или наличными</p>
      <p> 123123</p>
    </div>
  </div>
  <div>
    <div class="a_buy">
      <div>
        <p>название: жопоглазки</p>
        <p>цена:10000</p>
        <p>кол-во цветов: 10</p>
      </div>
      <div class="p_b">

        <a href="/bas/buyFlow/?id=<?php ?>" class="btn btn-outline-success" type="button" value="купить">Заказать </a>
        <a class="btn btn-outline-success" type="button" value="Подробнее">Удалить из корзины</a>
      </div>
    </div>
  </div>
</div><?php
} } else echo "Корзина пуста"; ?>

<?php
$view->component('end')

?>