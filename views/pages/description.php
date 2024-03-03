<?php
$view->component('start');
?>
<div class="buy-div">
        <div class="buyMini">
                <img src="views/components/img/Rectangle.png" alt="12312">
                <div class="buyInf">
                        <p> Время доставки: по городу 40мин, за городом 1ч 20мин~ </p>
                        <p> Оплата: на месте картой или наличными</p>
                        <p> Продавец: мария</p>
                </div>
        </div>
        <div>
                <p>название: жопоглазки</p>
                <p>цена:10000</p>
                <p>кол-во цветов: 10</p>
                <p id="pp">Описание:
                <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
                </p>
                <div class="p_b">
                        <a  href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
                        <a href="/bas/basket" class="btn btn-outline-success" type="button" value="Подробнее">В корзину</a>
                </div>
        </div>

</div>
<?php
$view->component('end')

?>