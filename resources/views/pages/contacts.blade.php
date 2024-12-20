@extends('layouts.app')
@section('title', 'Контакты .')
@section('description', 'Свяжитесь с нами по этим адресам и контактам.')
@section('content')
    <div class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8">
                <h1 class="display-4 fw-light mb-3">Добро пожаловать!</h1>
                <p class="fw-light font-large">Мы искренне рады приветствовать Вас в нашем магазине! Ваше посещение – для нас большая честь. Мы стремимся обеспечить Вас лучшим сервисом и предлагаем широкий ассортимент качественных товаров. Если у Вас возникли вопросы, нужна консультация или просто хотите поделиться своим мнением – не стесняйтесь обращаться к нам. Наша дружелюбная команда сделает всё возможное, чтобы сделать проведенное время в нашем магазине приятным и удовлетворяющим. Оставайтесь с нами и наслаждайтесь качеством и удобством!</p>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<div class="py-5">
    <div class="container">
        <ul class="list-inline-lg font-small uppercase letter-spacing-1">
            <li><a class="button-text-1" href="https://www.instagram.com/singeruz_shop" target="_blank">Instagram</a></li>
            <li><a class="button-text-1" href="#">Facebook</a></li>
            <li><a class="button-text-1" href="https://t.me/SINGERuz_shop" target="_blank">Telegram</a></li>
        </ul>
    </div><!-- end container -->
</div>

<!-- Google Maps -->
<div class="container-fluid p-0">
    <div id="map1" class="gmap gmap-xl">

        <!-- end Google maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d445.80422556684834!2d69.23083161713923!3d41.265305388284084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1687778333397!5m2!1sru!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- Contact Info, Form -->
<div class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <h6 class="fw-medium m-0">Тел:</h6>
                        <p>(+998 95) 20 222 02</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <h6 class="fw-medium m-0">Email:</h6>
                        <p>info@singeruz.com</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <h6 class="fw-medium m-0">Telegram:</h6>
                        <p>@SINGERuz_shop</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <h6 class="fw-medium m-0">Адрес:</h6>
                        <p>ул. Ш.Руставели , 132</p>
                    </div>
                </div><!-- end row(inner) -->
            </div>
            <div class="col-12 col-lg-7 text-lg-end">
                <form method="post" id="contactform">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" id="name" name="name" placeholder="Имя" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" id="email" name="email" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <input type="text" id="subject" name="subject" placeholder="Текст" required>
                    <textarea name="message" id="message" placeholder="Сообщение"></textarea>
                    <button class="button button-lg button-rounded button-outline-dark" type="submit">Отправить</button>
                </form>
                <!-- Submit result -->
                <div class="submit-result">
                    <span id="success">Thank you! Your Message has been sent.</span>
                    <span id="error">Something went wrong, Please try again!</span>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact Info, Form -->
@endsection
