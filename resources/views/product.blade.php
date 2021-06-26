@extends('layout/base')

@section('title', 'Product | Kode Koding')

@section('container')
    <!-- ========================
           page title
        =========================== -->
    <section id="page-title" class="page-title page-title-layout14 bg-overlay bg-overlay-2">
        <div class="bg-img"><img src="assets/images/page-titles/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Products Showcase</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ========================
             shop Products
          =========================== -->
    <section id="shop3Products" class="shop shop-grid shop-grid-3col pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="filtering-options">
                                <div class="filter-option-sorting">
                                    <div class="sort-box">
                                        <span>sort by:</span>
                                        <div class="select-box">
                                            <select>
                                                <option selected value="Default">Product Name</option>
                                                <option value="NewestItems">Newest Items</option>
                                                <option value="oldestItems">oldest Items</option>
                                                <option value="HighestPrice">Highest Price</option>
                                                <option value="LowestPrice">Lowest Price</option>
                                            </select>
                                        </div><!-- /.select-box -->
                                    </div><!-- /.sort-box -->
                                    <div class="sort-box">
                                        <span>Show:</span>
                                        <div class="select-box">
                                            <select>
                                                <option selected="" value="10">10 items / page</option>
                                                <option value="25">25 items / page</option>
                                                <option value="50">50 items / page</option>
                                                <option value="100">100 items / page</option>
                                            </select>
                                        </div><!-- /.select-box -->
                                    </div><!-- /.sort-box -->
                                </div><!-- /.filter-option-sorting -->
                                <div class="filter-option-view">
                                    <span>view as:</span>
                                    <a id="gridView" class="active" href="#"><i class="fa fa-th-large"></i></a>
                                    <a id="listView" href="#"><i class="fa fa-th-list"></i></a>
                                </div><!-- /.filter-option-view -->
                            </div><!-- /.filtering-options -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <!-- Product item #1 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/1.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="{{ url('/product-single') }}" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
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
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
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
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Checked Flannel Shirt</a></h4>
                                    <span class="product__price">$19,99</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #4 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/4.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Brown Leather Boots</a></h4>
                                    <span class="product__price">$33.00</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #5 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/5.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Leather & Brass Tote</a></h4>
                                    <span class="product__price">$63.00</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #6 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/6.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Mismo Briefcase</a></h4>
                                    <span class="product__price">$12,99</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #7 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/7.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Mismo Briefcase</a></h4>
                                    <span class="product__price">$38,00</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #8 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/8.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Headphones Pryma</a></h4>
                                    <span class="product__price">$16,00</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #9 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/1.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">T-Shirt With a Print</a></h4>
                                    <span class="product__price">$18.99</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #10 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/2.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Brown Leather Belt</a></h4>
                                    <span class="product__price">$12,99</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #11 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/3.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Checked Flannel Shirt</a></h4>
                                    <span class="product__price">$19,99</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Product item #12 -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="product-item">
                                <div class="product__img">
                                    <img src="assets/images/shop/grid/4.jpg" alt="Product">
                                    <div class="product__action">
                                        <a href="#" class="btn btn__primary btn__hover3"><i class="york-cart"></i>Get This Item</a>
                                    </div><!-- /.product-action -->
                                </div><!-- /.product-img -->
                                <div class="product__content">
                                    <h4 class="product__title"><a href="#">Brown Leather Boots</a></h4>
                                    <span class="product__price">$33.00</span>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <nav class="pagination-area">
                                <ul class="pagination justify-content-center">
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav><!-- /.pagination-area -->
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
                        <div class="widget widget-tags">
                            <h5 class="widget__title">Tags</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="#">Responsive</a></li>
                                    <li><a href="#">Fresh</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-Tags -->
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop Products -->
@endsection
