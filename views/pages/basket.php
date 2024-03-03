<?php
$view->component('start')

?>

<h1 style="text-align: center;">Корзина</h1>
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

        <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">Заказать </a>
        <a class="btn btn-outline-success" type="button" value="Подробнее">Удалить из корзины</a>
      </div>
    </div>
  </div>
</div>
<?php
$view->component('end')

?>