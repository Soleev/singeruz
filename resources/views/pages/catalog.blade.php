@extends('layouts.app')
@section('title', 'Каталог всей продукции')
@section('description', 'Описание')
@section('content')
    <!-- Products section -->
    <div class="section">
        <div class="container">
            <!-- Sorting -->
            <div class="mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6">
                        <p>Показано <?php echo $rowsCount; ?></p>
                    </div>
                    <div class="col-12 col-sm-6 text-sm-end">
                        <select class="custom-select">
                            <option selected>Сортировка по умолчанию</option>
                            <option value="1">Сортировка по новизне</option>
                            <option value="2">Сортировка по рейтингу</option>
                        </select>
                    </div>
                </div><!-- end row -->
            </div>

            <!-- Products -->
            <div class="row g-4 gy-5">


                <?php
                foreach ($result as $row) {
                    $parent_desc = $row["parent_desc"];
                    ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                                <?php echo "<a href=" . "../" . "product-single.php?id=" . $row["id"] . ">";
                                echo "<img src=" . "../assets/images/product/" . $row["img"] . " alt=" . ">";
                                echo "<img src=" . "../assets/images/product/" . $row["img2"] . " alt=" . ">"; ?>
                            </a>
                            <div class="product-badge-left">
                                <span class="font-small uppercase font-family-secondary fw-medium">Новинка</span>
                            </div>
                            <div class="product-badge-right red">
                                    <span class="font-small uppercase font-family-secondary fw-medium">
                                        <?php echo "$parent_desc"; ?></span>
                            </div>
                        </div>
                        <div class="product-title">
                            <h6 class="fw-medium"><?php echo "<a href=" . "../" . "product-single.php?id=" . $row["id"] . ">" . $row["tittle"] . "</a></h6>"; ?>
                                <div class="add-to-wishlist">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                        </div>
                    </div>
                </div><?php } ?>
            </div><!-- end row -->

        </div><!-- end container -->
    </div>
    <!-- end Products section -->
@endsection
