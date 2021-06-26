@extends('layout/base')

@section('title', 'Projects | Kode Koding')

@section('container')
    <!-- ========================
                       page title
                    =========================== -->
    <section id="page-title" class="page-title page-title-layout14 bg-overlay bg-overlay-2">
        <div class="bg-img"><img src="assets/images/page-titles/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Product Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/product') }}">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Title</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ========================
                   shop single
                =========================== -->
    <section id="shopSingle" class="shop slider shop-single pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
                        data-slide-sm="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0"
                        data-loop="false" data-speed="500">
                        <div class="product__single-img">
                            <img src="assets/images/shop/full/1.jpg" alt="product">
                        </div><!-- /.product-img -->
                        <div class="product__single-img">
                            <img src="assets/images/shop/full/1.jpg" alt="product">
                        </div><!-- /.product-img -->
                        <div class="product__single-img">
                            <img src="assets/images/shop/full/1.jpg" alt="product">
                        </div><!-- /.product-img -->
                    </div>
                    <h4 class="product__title">E-Commerce System Build-Up | Customable</h4>
                    <div class="product__meta">
                        <span class="product__price">$ 500.00</span>
                        <div class="product__meta-review">
                            <span>Helped 10 Clients(s)</span>
                        </div>
                        <!--- .product-meta-review -->
                    </div><!-- /.product-meta -->
                    <div class="product__desc">
                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor
                            aliquet
                            at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin
                            etiam
                            libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id
                            odio.
                        </p>
                    </div><!-- /.product-desc -->
                    <div class="product__details">
                        <h6 class="product__details-title">Features Scope:</h6>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <ul class="icon-list layout3">
                                    <li>Creative template</li>
                                    <li>Unique &amp; clean design</li>
                                    <li>Super features</li>
                                </ul>
                            </div><!-- /.col-lg-3 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <ul class="icon-list layout3">
                                    <li>E-Commerce pages</li>
                                    <li>Great UI / UX work </li>
                                    <li>Awesome typography</li>
                                </ul>
                            </div><!-- /.col-lg-3 -->
                        </div>
                    </div><!-- /.product-details -->
                    <div class="product__form-wrap">
                        <form>
                            <div class="product__action-btns">
                                <a class="btn btn__primary btn__rounded" href="#">get this item</a>
                                <a class="btn btn__secondary btn__rounded" href="#">ask questions</a>
                            </div><!-- /.product-action-btns -->
                        </form>
                    </div><!-- /.product-form -->
                    <div class="product__share">
                        <h5 class="product__share-title">share product:</h5>
                        <div class="social__icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!-- /.product-share -->
                    <div class="product__tabs">
                        <nav class="nav nav-tabs">
                            <a class="nav__link active" data-toggle="tab" href="#Description">Description</a>
                            <a class="nav__link" data-toggle="tab" href="#Details">Details</a>
                            <a class="nav__link" data-toggle="tab" href="#Reviews">Reviews (0)</a>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="Description">
                                <p>York is not just about graphic design; it's more than that. We offer integral
                                    communication
                                    services, and we're responsible for our process and results. We thank each of our
                                    clients and their
                                    portfolios; thanks to them we have grown and built what we are today! After all, as
                                    described in Web
                                    Design Trends 2015 & 2016, vision dominates a lot of our subconscious interpretation of
                                    the world
                                    around
                                    us. On top of that, pleasing images create a better user experience</p>
                            </div><!-- /.desc-tab -->
                            <div class="tab-pane fade" id="Details">
                                <p>Yorks is not just about graphic design; it's more than that. We offer integral
                                    communication
                                    services, and we're responsible for our process and results. We thank each of our
                                    clients and their
                                    portfolios; thanks to them we have grown and built what we are today! After all</p>
                                <p>as described in Web
                                    Design Trends 2015 & 2016, vision dominates a lot of our subconscious interpretation of
                                    the world
                                    around us. On top of that, pleasing images create a better user experience.
                                    At League Agency, we shows only the best websites and portfolios built completely with
                                    passion,
                                    simplicity & creativity !</p>
                            </div><!-- /.details-tab -->
                            <div class="tab-pane fade" id="Reviews">
                                <form class="reviews__form">
                                    <div class="form-group">
                                        <label for="reviewerName">Name</label>
                                        <input id="reviewerName" type="text" class="form-control">
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="reviewerEmail">Email</label>
                                        <input id="reviewerEmail" type="text" class="form-control">
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="reviewerReview">Review</label>
                                        <textarea id="reviewerReview" class="form-control"></textarea>
                                    </div><!-- /.form-group -->
                                    <button type="submit" class="btn btn__primary btn__hover3">Submit</button>
                                </form>
                            </div><!-- /.reviews-tab -->
                        </div>
                    </div><!-- /.product-tabs -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <nav class="pagination-area">
                                <ul class="pagination justify-content-center mb-60">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav><!-- .pagination-area -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h6 class="related__products-title text-center-xs mb-25">Related Products</h6>
                            <div class="row">
                                <!-- Product item #1 -->
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="product-item">
                                        <div class="product__img">
                                            <img src="assets/images/shop/grid/1.jpg" alt="Product">
                                            <div class="product__action">
                                                <a href="#" class="btn btn__primary btn__hover3"><i
                                                        class="york-cart"></i>Get This Item</a>
                                            </div><!-- /.product-action -->
                                        </div><!-- /.product-img -->
                                        <div class="product__content">
                                            <h4 class="product__title"><a href="#">T-Shirt With a Print</a></h4>
                                            <span class="product__price">$18.99</span>
                                        </div><!-- /.product-content -->
                                    </div><!-- /.product-item -->
                                </div><!-- /.col-lg-4 -->
                                <!-- Product item #2 -->
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="product-item">
                                        <div class="product__img">
                                            <img src="assets/images/shop/grid/2.jpg" alt="Product">
                                            <div class="product__action">
                                                <a href="#" class="btn btn__primary btn__hover3"><i
                                                        class="york-cart"></i>Get This Item</a>
                                            </div><!-- /.product-action -->
                                        </div><!-- /.product-img -->
                                        <div class="product__content">
                                            <h4 class="product__title"><a href="#">Brown Leather Belt</a></h4>
                                            <span class="product__price">$12,99</span>
                                        </div><!-- /.product-content -->
                                    </div><!-- /.product-item -->
                                </div><!-- /.col-lg-4 -->
                                <!-- Product item #3 -->
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="product-item">
                                        <div class="product__img">
                                            <img src="assets/images/shop/grid/3.jpg" alt="Product">
                                            <div class="product__action">
                                                <a href="#" class="btn btn__primary btn__hover3"><i
                                                        class="york-cart"></i>Get This Item</a>
                                            </div><!-- /.product-action -->
                                        </div><!-- /.product-img -->
                                        <div class="product__content">
                                            <h4 class="product__title"><a href="#">Checked Flannel Shirt</a></h4>
                                            <span class="product__price">$19,99</span>
                                        </div><!-- /.product-content -->
                                    </div><!-- /.product-item -->
                                </div><!-- /.col-lg-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-9 -->
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <aside class="sidebar shop-sidebar">
                        <div class="widget widget-search">
                            <div class="widget__content">
                                <form class="widget__form-search">
                                    <input type="text" class="form-control" placeholder="Type and hit enter ...">
                                    <button class="btn" type="submit"><i class="york-search"></i></button>
                                </form>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-search -->
                        <div class="widget widget-categories">
                            <h5 class="widget__title">categories</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
                        <div class="widget widget-poducts">
                            <h5 class="widget__title">Best Sellers</h5>
                            <div class="widget__content">
                                <!-- product item #1 -->
                                <div class="widget-product-item">
                                    <div class="widget__product-img">
                                        <a href="#"><img src="assets/images/shop/thumbs/1.png" alt="product"></a>
                                    </div><!-- /.product-product-img -->
                                    <div class="widget__product-content">
                                        <h6 class="widget__product-title"><a href="#">Mismo Briefcase</a></h6>
                                        <span class="widget__product-price">$ 38.00</span>
                                    </div><!-- /.widget-product-content -->
                                </div><!-- /.widget-product-item -->
                                <!-- product item #2 -->
                                <div class="widget-product-item">
                                    <div class="widget__product-img">
                                        <a href="#"><img src="assets/images/shop/thumbs/2.png" alt="product"></a>
                                    </div><!-- /.product-product-img -->
                                    <div class="widget__product-content">
                                        <h6 class="widget__product-title"><a href="#">Brown Leather</a></h6>
                                        <span class="widget__product-price">$ 33.00</span>
                                    </div><!-- /.widget-product-content -->
                                </div><!-- /.widget-product-item -->
                                <!-- product item #3 -->
                                <div class="widget-product-item">
                                    <div class="widget__product-img">
                                        <a href="#"><img src="assets/images/shop/thumbs/3.png" alt="product"></a>
                                    </div><!-- /.product-product-img -->
                                    <div class="widget__product-content">
                                        <h6 class="widget__product-title"><a href="#">T-Shirt With a Print</a></h6>
                                        <span class="widget__product-price">$ 18.00</span>
                                    </div><!-- /.widget-product-content -->
                                </div><!-- /.widget-product-item -->
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-poducts -->
                        <div class="widget widget-filter">
                            <h5 class="widget__title">Pricing Filter</h5>
                            <div class="widget__content">
                                <div id="rangeSlider"></div>
                                <div class="price-output">
                                    <label for="rangeSliderResult">Price: </label>
                                    <input type="text" id="rangeSliderResult" readonly>
                                </div>
                                <a class="btn btn__secondary btn__bordered btn__rounded" href="#">Filter Now</a>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-filter -->
                </div><!-- /.widget-Tags -->
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop single -->
@endsection
