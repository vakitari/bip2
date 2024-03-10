<?php
$view->component('start')

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
        for ($i = 0; $i < 6; $i++) {

        ?>
            <div class="prod-div">
                <img src="views/components/img/Rectangle.png" alt="12312">
                <p>название: жопоглазки</p>
                <p>цена:10000</p>
                <p>кол-во цветов: 10</p>
                <p class="pp">Описание:
                <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег растаял, прекрасные бутоны этого цветка распускаются и все кайфуют</p>
                </p>
                <div class="p_b">
                    <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
                    <button class="registerButton btn btn-outline-success" style="height: 38px;" type="button" value="Подробнее">Подробнее</button>
                </div>
            </div>

        <?php
        }
        ?>
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

    for (var i = 0; i < registerButtons.length; i++) {
        registerButtons[i].onclick = function() {
        registerModal.style.display = "block";
        console.log(13);

    };
    }
    // Когда пользователь нажимает на кнопку, открываем модальное окно
    

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