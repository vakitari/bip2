<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * @var \App\Kernel\Auth\Auth $auth
 * @var \App\Kernel\DataBase\DataBase $db
 */
$user = $auth->user();
 $product;
$view->component('start');
?>
<div class="pay-page">
    <div class="payment">
    <form action="/bas/deliveryBuy" method="post">

        <p>Доставка или заберете сами?</p>
        <button id="button1" type="button" class="btn">Самовывоз</button>
        <button id="button2" type="button" class="btn">Доставка</button>
        <div id="test" style="display: none;">
            <p>Тогда укажите адрес доставки:</p>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Адрес</span>
                <input style="border-color: cadetblue;" name="dost" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
        <div class="time-delivery">
            <p>Время доставки: 20:21</p>
        </div>
        <input type="text" placeholder="Количество" name="qtyBuy" class="input-group" oninput="calculatePrice()">
        <div class="card-pay">
            <p>Заполните данные карты</p>
                <input type="text" id="myInput" placeholder="Номер карты" class="input-group">
                <input type="text" placeholder="Имя владельца" class="input-group">
                <div>
                    <input type="text" id="myInput3" placeholder="Срок действия" class="input-group">
                    <input type="text" id="myInput4" placeholder="CVV/CVC" class="input-group">
                </div>
        </div>
        <p style="margin-top: 20px;">доставка: бесплатная</p>
        <input type="hidden" name="finP">
        Итого:<p id="finPrice"></p>
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>"  >
        <input type="hidden" name="user_id" value="<?php echo $user->id(); ?>">
        <button type="submit" >Оплатить</button>
        </form>

    </div>


    <div class="prod-div">
        <img src="<?php echo $storage->url($product['avatar']); ?>" alt="12312">
        <p>название: <?php echo $product['title'] ?></p>
        <p>цена:<?php echo $product['price'] ?></p>
        <p>кол-во цветов: <?php echo $product['qty'] ?></p>
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
    
    function calculatePrice() {
            var qtyBuy = document.querySelector('[name="qtyBuy"]').value;
            var finPrice = document.querySelector('#finPrice');
            var finP = document.querySelector('[name="finP"]');
            if (qtyBuy > <?php echo $product['qty'] ?>) {
            alert('Число не может быть больше ' + <?php echo $product['qty'] ?>);
            document.querySelector('[name="qtyBuy"]').value = <?php echo $product['qty'] ?>;
            }
            if (qtyBuy === '') {
                finP.value = '';
                finPrice.textContent = '';
            } else {
                finP.value = qtyBuy * <?php echo $product['price'] ?>;
                finPrice.textContent  = qtyBuy * <?php echo $product['price'] ?>;

            }
        }
</script>
<?php
$view->component('end')
?>