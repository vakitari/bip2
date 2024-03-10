<?php
$view->component('start');
?>
<div class="pay-page">
    <div class="payment">
        <p>Доставка или заберете сами?</p>
        <button id="button1" class="btn">Самовывоз</button>
        <button id="button2" class="btn">Доставка</button>
        <div id="test" style="display: none;">
            <p>Тогда укажите адрес доставки:</p>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Адрес</span>
                <input style="    border-color: cadetblue;" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
        <div class="time-delivery">
            <p>Время доставки: 20:21</p>
        </div>
        <div class="card-pay">
            <p>Заполните данные карты</p>
            <form action="">
                <input type="text" id="myInput" placeholder="Номер карты" class="input-group">
                <input type="text" placeholder="Имя владельца" class="input-group">
                <div>
                    <input type="text" id="myInput3" placeholder="Срок действия" class="input-group">
                    <input type="text" id="myInput4" placeholder="CVV/CVC" class="input-group">
                </div>
            </form>
        </div>
        <p style="margin-top: 20px;">доставка: бесплатная</p>
        <p>Итого: 10000р</p>
        <a href="" class="btn btn-success">Оплатить</a>

    </div>


    <div class="prod-div">
        <img src="views/components/img/Rectangle.png" alt="12312">
        <p>название: жопоглазки</p>
        <p>цена:10000</p>
        <p>кол-во цветов: 10</p>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $("#button1").click(function() {
            var test = document.getElementById("test");
            var button1 = document.getElementById("button1");
            var button2 = document.getElementById("button2");
            button1.style.background = (button1.style.backgroundColor === 'green') ? 'white' : 'green';
            button1.style.color = (button1.style.color === 'white') ? 'black' : 'white';

            button2.style.background = (button2.style.backgroundColor === 'green') ? 'white' : 'white';
            button2.style.color = (button2.style.color === 'white') ? 'black' : 'black';

            test.style.display = (test.style.display === 'block') ? 'none' : 'none';
        });
        $("#button2").click(function() {
            var test = document.getElementById("test");
            var button1 = document.getElementById("button1");
            var button2 = document.getElementById("button2");
            button2.style.background = (button2.style.backgroundColor === 'green') ? 'white' : 'green';
            button2.style.color = (button2.style.color === 'white') ? 'black' : 'white';

            button1.style.background = (button1.style.backgroundColor === 'green') ? 'white' : 'white';
            button1.style.color = (button1.style.color === 'white') ? 'black' : 'black';

            test.style.display = (test.style.display === 'none') ? 'block' : 'none';
        });


        document.getElementById('myInput').addEventListener('input', function() {
            if (this.value.length == 4 || this.value.length == 9 || this.value.length == 14) {
                this.value += ' ';
            }
            if (this.value.length > 19) {
                this.value = this.value.slice(0, 19);
            }
        });
        document.getElementById('myInput').addEventListener('keydown', function(event) {
            if (event.key === 'Backspace') {
                var input = this;
                if (this.value.length == 5 || this.value.length == 10 || this.value.length == 15) {
                    input.value = input.value.slice(0, -1);
                }
            }
        });

        document.getElementById('myInput3').addEventListener('input', function() {
            if (this.value.length == 2) {
                this.value += '/';
            }
            if (this.value.length > 5) {

                this.value = this.value.slice(0, 5);
            }
        });
        document.getElementById('myInput3').addEventListener('keydown', function(event) {
            if (event.key === 'Backspace') {
                var input = this;
                if (this.value.length == 3 ) {
                    input.value = input.value.slice(0, -1);
                }
            }
        });
        document.getElementById('myInput4').addEventListener('input', function() {
            if (this.value.length > 3) {
                this.value = this.value.slice(0, 3);
            }
        });
    });
</script>
<?php
$view->component('end')
?>