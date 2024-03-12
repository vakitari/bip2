<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\DataBase\DataBase $db
 */
$view->component('start');

?>

<div class="home-div">

    <p>Интернет магазин Flower - это удобство, скорость, и качество доставки.
    </p>
</div>

<div class="home-inf">
    <div class="inf-div">
        <h2>10</h2>
        <p>лет на рынке</p>
    </div>
    <div class="inf-div">
        <h2>1000+</h2>
        <p>Покупателей в день</p>
    </div>
    <div class="inf-div">
        <h2>100+</h2>
        <p>магазинов по всей стране</p>
    </div>
</div>
<div class="content-home">
    <div class="prod-home">
    <?php
  if (!$db->getAll('product')) {  ?>

    <p>пока что нет товаров</p>
    <?php } else {
    foreach ($db->getAll('product') as $value)  {  ?>

            <div class="prod-div">
                <img src="<?php echo $storage->url($value['avatar']); ?>" alt="12312">
                <p>название: <?php echo $value['title']; ?></p>
                <p>цена:<?php echo $value['price']; ?></p>
                <p>кол-во цветов: <?php echo $value['qty']; ?></p>
                </p>
                <div class="p_b">
                    <a href="/bas/buyFlow/?id=<?php echo $value['id']; ?>" class="btn btn-outline-success" type="button" value="купить">купить </a>
                    <a  href="/bas/description/?id=<?php echo $value['id']; ?>" class="registerButton btn btn-outline-success" style="height: 38px;">Подробнее</a>
                </div>
            </div>

        <?php } ?>
         <?php } ?>
        
        <!-- модальное окно -->
 <!-- class="btn btn-outline-success" -->
    </div>
</div>

<?php
$view->component('end')

?>