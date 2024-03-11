<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\DataBase\DataBase $bd
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
  if (!$bd->getAll('product')) {  ?>

    <p>пока что нет товаров</p>
    <?php } else {
    foreach ($bd->getAll('product') as $value)  {  ?>

            <div class="prod-div">
                <img src="views/components/img/Rectangle.png" alt="12312">
                <p>название: <?php echo $value['title']; ?></p>
                <p>цена:<?php echo $value['price']; ?></p>
                <p>кол-во цветов: <?php echo $value['qty']; ?></p>
                <p class="pp">Описание: <button id="desc" class="jopa btn"> Развернуть</button>
                <p class="description" style="display: none;"><?php echo $value['description']; ?></p>
                </p>
                <div class="p_b">
                    <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
                    <button class="registerButton btn btn-outline-success" style="height: 38px;" type="button" value="" >Подробнее</button>
                </div>
            </div>

        <?php } ?>
         <?php } ?>
        <!-- модальное окно -->
        <div id="registerModal" class="modal">
            <!-- Форма регистрации -->

            <div class="modal-content" id="registerForm">
                <div> <span class="close">&times;</span></div>

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
                    <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег растаял, прекрасные бутоны этого цветка распускаются и все кайфуют</p>
                    </p>
                    <div class="p_b">
                        <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
                        <a href="/bas/basket" class="btn btn-outline-success" type="button" value="Подробнее">В корзину</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- модальное окно -->
 <!-- class="btn btn-outline-success" -->
    </div>
</div>
<script>
    // Получаем элементы кнопки и модального окна
    var registerButtons = document.getElementsByClassName("registerButton");
    var registerModal = document.getElementById("registerModal");
    var closeButton = document.getElementsByClassName("close")[0];
    var buttons = document.querySelectorAll(".jopa");
    var description = document.getElementsByClassName('description')
    var isExpanded = false;
    for (var i = 0; i < registerButtons.length; i++) {
        registerButtons[i].onclick = function() {
        registerModal.style.display = "block";

    };
    }
    for (var i = 0; i < buttons.length; i++) {
     buttons.onclick = function() {
    var description = this.nextElementSibling.nextElementSibling;

    description.style.display = (description.style.display === 'none') ? 'block' : 'none';

    if (description.style.display === 'block') {
      this.innerText = "Свернуть";
    } else {
      this.innerText = "Развернуть";
    }
  };
}

    // Когда пользователь нажимает на кнопку закрытия, закрываем модальное окно
    closeButton.onclick = function() {
        registerModal.style.display = "none";
    }

    // Когда пользователь щелкает вне модального окна, закрываем его
    window.onclick = function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }
    

</script>
<?php
$view->component('end')

?>