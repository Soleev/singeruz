@extends('layouts.app')
@section('title', 'Все для швейного производства')
@section('description', 'Магазин с большим выбором запчастей и расходников для швейного, текстильного производства')
@section('content')
    <!-- Hero section -->
    <div class="owl-carousel owl-dots-overlay owl-nav-overlay owl-loaded owl-drag" data-owl-items="1" data-owl-autoplay="true">
        <!-- Carousel Item 1 -->

        <div class="section-xl bg-image" data-bg-src="../assets/images/hero6.jpg">
            <div class="bg-dark-02">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h6 class="uppercase fw-medium mb-3">для парогенераторов, гладильных столов</h6>
                            <h1 class="display-4 fw-semi-bold">Запчасти для ВТО </h1>
                            <a class="button button-lg button-outline-white-2 button-border-2 mt-3" href="/catalog/gladzapchasti.php">Посмотреть все</a>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </div>


        <!-- Carousel Item 2 -->
        <div class="section-xl bg-image" data-bg-src="../assets/images/hero5.jpg">
            <div class="bg-dark-02">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h6 class="uppercase fw-medium mb-3">для швейного производства</h6>
                            <h1 class="display-4 fw-semi-bold">Аксессуары </h1>
                            <a class="button button-lg button-outline-white-2 button-border-2 mt-3" href="/catalog/etc.php">Посмотреть все</a>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </div>
        <!-- Carousel Item 3 -->
        <div class="section-xl bg-image" data-bg-src="../assets/images/hero4.jpg">
            <div class="bg-dark-02">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h6 class="uppercase fw-medium mb-3">для швейной промышленности</h6>
                            <h1 class="display-4 fw-semi-bold">Гладильные системы</h1>
                            <a class="button button-lg button-outline-white-2 button-border-2 mt-3" href="/catalog/gladzapchasti.php">Посмотреть все</a>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </div>
    </div>
    <!-- end Hero section -->

    <!-- New Arrivals -->
    <div class="section-lg">
        <div class="container">
            <div class="text-center mb-5">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fw-normal">Собственная продукция</h2>
                        <p>В широком ассортименте предоставлена продукция собственного производства</p>
                    </div>
                </div><!-- end row -->
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="product-box">
                        <div class="product-img">
                            <a href="product-single.php?id=154">
                                <img src="../assets/images/product/d52спрейпятноводитель.jpg" alt="">
                                <img src="../assets/images/product/d52спрейпятноводитель.jpg" alt="">
                            </a>
                            <div class="product-badge-left">
                                <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                            </div>
                        </div>
                        <div class="product-title">
                            <h6 class="fw-medium"><a href="product-single.php?id=154">Спрей пятновыводитель</a></h6>
                            <div class="add-to-wishlist">
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="product-box">
                        <div class="product-img">
                            <a href="product-single.php?id=143">
                                <img src="../assets/images/product/e18.jpg" alt="">
                                <img src="../assets/images/product/e17РулеткаSIngeruzбольшая.jpg" alt="">
                            </a>
                            <div class="product-badge-left">
                                <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                            </div>
                        </div>
                        <div class="product-title">
                            <h6 class="fw-medium"><a href="product-single.php?id=143">Рулетка singeruz большая</a></h6>
                            <div class="add-to-wishlist">
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="product-box">
                        <div class="product-img">
                            <a href="product-single.php?id=54">
                                <img src="../assets/images/product/c65.jpg" alt="">
                                <img src="../assets/images/product/c67.jpg" alt="">
                            </a>
                            <div class="product-badge-left">
                                <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                            </div>
                        </div>
                        <div class="product-title">
                            <h6 class="fw-medium"><a href="product-single.php?id=54">Жилки для крепления бирок</a></h6>
                            <div class="add-to-wishlist">
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="text-center mt-5">
                <a class="button button-lg button-dark button-rounded" href="catalog.php">Посмотреть больше</a>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end New Arrivals -->

    <!-- Product Categories -->
    <div class="container-fluid px-2">
        <div class="row g-2">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/1.jpg" alt="Аксессуары и расходники">
                    <div class="content">
                        <h5 class="fw-normal">Аксессуары и расходники</h5>
                        <p> Для швейного производства</p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/bumaga.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/2.jpg" alt="Влажно-тепловая обработка">
                    <div class="content">
                        <h5 class="fw-normal">Запчасти для гладильного оборудования</h5>
                        <p></p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/gladzapchasti.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/3.jpg" alt="Запасные части">
                    <div class="content">
                        <h5 class="fw-normal">Запасные части</h5>
                        <p> Иглы, запчасти, аксессуары для швейного производства</p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/komplekt.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/4.jpg" alt="Иглы">
                    <div class="content">
                        <h5 class="fw-normal">Иглы</h5>
                        <p> Иглы, запчасти, аксессуары для швейного производства</p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/igli.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/5.jpg" alt="Лапки">
                    <div class="content">
                        <h5 class="fw-normal">Лапки</h5>
                        <p>Для машин с игольным продвижением, с нижним продвижением, с тройным продвижением и с шагающей лапкой</p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/lapki.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/6.jpg" alt="Ножницы и ножи">
                    <div class="content">
                        <h5 class="fw-normal">Ножницы</h5>
                        <p>Для подрезки нитей, вспарывания, прорезания петель, выполнения надсечек и других мелких работ</p>
                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/nojnici.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/7.jpg" alt="Оконтователи">
                    <div class="content">
                        <h5 class="fw-normal">Окантователи</h5>

                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/okant.php">Посмотреть все</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fancy-box-3">
                    <img src="../assets/images/category/8.jpg" alt="Спрей">
                    <div class="content">
                        <h5 class="fw-normal">Спрей</h5>

                    </div>
                    <div class="hover-content">
                        <a class="button button-lg button-outline-white-2" href="../catalog/sprey.php">Посмотреть все</a>
                    </div>
                </div>
            </div>

        </div><!-- end row -->
    </div><!-- end container-fluid -->
    <!-- end Product Categories -->

    <!-- Trending Items -->
    <div class="section-lg">
        <div class="container">
            <div class="text-center mb-5">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fw-normal">Износостойкая продукция</h2>
                        <p>Материалы, которые обладают высокой степенью сопротивления износу.
                            Износостойкая продукция разрабатывается и производится с целью увеличения срока службы и устойчивости к износу.
                            Продукция имеет специальную структуру и состав, которые обеспечивают высокую степень износостойкости.</p>
                    </div>
                </div><!-- end row -->
            </div>
            <div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="24" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="3" data-owl-xl="3">
                <!-- Carousel Item 1 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="product-single.php?id=216">
                            <img src="../assets/images/product/j272пластина257033B56.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                        </div>
                        <div class="product-badge-right red">
                            <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="fw-medium"><a href="product-single.php?id=216">Пластина 257033B56</a></h6>
                        <div class="add-to-wishlist">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="product-single.php?id=211">
                            <img src="../assets/images/product/j188петлитель257550.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                        </div>
                        <div class="product-badge-right red">
                            <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="fw-medium"><a href="product-single.php?id=211">Петлитель 257550</a></h6>
                        <div class="add-to-wishlist">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 3 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="product-single.php?id=204">
                            <img src="../assets/images/product/j257лапка257321-5.6.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                        </div>
                        <div class="product-badge-right red">
                            <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="fw-medium"><a href="product-single.php?id=204">Лапка 257321-5.6</a></h6>
                        <div class="add-to-wishlist">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 4 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="product-single.php?id=198">
                            <img src="../assets/images/product/j238КомплектPegasusW562.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                        </div>
                        <div class="product-badge-right red">
                            <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="fw-medium"><a href="product-single.php?id=198">Комплект Pegasus W562</a></h6>
                        <div class="add-to-wishlist">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 5 -->
                <div class="product-box">
                    <div class="product-img">
                        <a href="product-single.php?id=191">
                            <img src="../assets/images/product/j87иглодержателKG142.jpg" alt="">
                        </a>
                        <div class="product-badge-left">
                            <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                        </div>
                        <div class="product-badge-right red">
                            <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                        </div>
                    </div>
                    <div class="product-title">
                        <h6 class="fw-medium"><a href="product-single.php?id=191">Иглодержатель KG142</a></h6>
                        <div class="add-to-wishlist">
                            <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end owl-carousel -->
            <div class="text-center mt-5">
                <a class="button button-lg button-gray button-rounded" href="gold-catalog.php">Посмотреть все</a>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Trending Items -->
@endsection
