<?php
$view->component('start');

?>
<div class="buy-div">
        <div class="buyMini">
                <img src="<?php echo $storage->url($product['avatar']); ?>" alt="12312">
                <div class="buyInf">
                        <p> Время доставки: по городу 40мин, за городом 1ч 20мин~ </p>
                        <p> Оплата: на месте картой или наличными</p>
                        <p> Продавец: мария</p>
                </div>
        </div>
        <div>
                <p>название: <?php echo $product['title'] ?></p>
                <p>цена:<?php echo $product['price'] ?></p>
                <p>кол-во цветов: <?php echo $product['qty'] ?></p>
                <p id="pp">Описание:
                <p><?php echo $product['description'] ?></p>
                </p>
                <div class="p_b">
                        <a href="/bas/buyFlow/" class="btn btn-outline-success" type="button" value="купить">купить </a>
                        <a href="/bas/basket/?id=<?php echo $product['id']?>" class="btn btn-outline-success" type="button" value="Подробнее">В корзину</a>
                </div>
        </div>
</div>
<?php
$view->component('end')

?>