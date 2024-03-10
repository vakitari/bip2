<?php
$view->component('start')
?>
 <h1>Контакты</h1>
        <p>Мы всегда рады помочь и ответить на все ваши вопросы. Свяжитесь с нами по указанным ниже контактам:</p>
        <div class="contact-info">
            <p><strong>Адрес:</strong> Москва, ул. Цветочная, д. 1</p>
            <p><strong>Телефон:</strong> +7 (123) 456-78-90</p>
            <p><strong>Email:</strong> info@flower.ru</p>
            <p><strong>Режим работы:</strong> Пн-Вс, с 9:00 до 21:00</p>
        </div>
        <p>Вы также можете оставить сообщение с помощью формы обратной связи ниже:</p>
        <form action="send_message.php" method="post">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="email" name="email" placeholder="Ваш email" required>
            <textarea name="message" placeholder="Ваше сообщение" required></textarea>
            <input type="submit" value="Отправить">
        </form>
<?php
$view->component('end')
?>