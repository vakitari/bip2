<?php
$view->component('start');
?>
<div class="pay-page">
  <div class="payment">
    <p>И того: 10000р</p>
    <p>Доставка или заберете сами?</p>
    <button id="button1" value="Самовывоз"></button>
    <button id="button2" value="Доставка"></button>

    <p>123123</p>
    <p>123123</p>
  </div>

  <div class="prod-div">
    <img src="views/components/img/Rectangle.png" alt="12312">
    <p>название: жопоглазки</p>
    <p>цена:10000</p>
    <p>кол-во цветов: 10</p>
    
    <div class="p_b">
      <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
      <a href="/bas/description" class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#button1").click(function() {
                var data = {
                    name: $("#button1").val(),
                };
                console.log(data);
                

                $.ajax({
                    type: "POST",
                    url: "/bas/post",
                    data: data,
                    success: function(response) {
                        alert(response);
                    }
                });
            });
            $("#button2").click(function() {
                var data = {
                    name: $("#button2").val(),
                };
                console.log(data);
                

                $.ajax({
                    type: "POST",
                    url: "/bas/post",
                    data: data,
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
<?php
dd($_SESSION);
$view->component('end')
?>