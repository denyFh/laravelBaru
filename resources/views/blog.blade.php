@extends('layout/base')

@section('title', 'Blog | Kode Koding')

@section('container')
    <!-- ========================
               page title
            =========================== -->
    <section id="page-title" class="page-title page-title-layout5 bg-overlay bg-overlay-2">
        <div class="bg-img"><img src="assets/images/banners/9.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-10">
                    <blockquote class="blockquote blockquote-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum
                        tristique
                        <span class="quote__author">Begha, Book Name</span>
                    </blockquote><!-- /.blockquote-2 -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ======================
                      Blog Grid
                    ========================= -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row">
                        <!-- Blog Item #1 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/1.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Business</a><a href="#">Tips</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Jan 20, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="{{ url('single') }}">Four ways to cheer yourself up
                                            on Blue Monday!</a>
                                    </h4>
                                    <p class="blog__desc">The third Monday of January is supposed to be day of year. Whether
                                        you
                                        believe that or not....</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #2 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/2.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Modern</a><a href="#">Photography</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Oct 18, 2017</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Old cameras can capture images better than nowdays
                                            camera!</a>
                                    </h4>
                                    <p class="blog__desc">Actually, Woodstock was not the first outdoor festival to feature
                                        multiple
                                        bands
                                        over several days performing...</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #3 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/3.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Technology</a><a href="#">City</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Jan 20, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">New subway line has the most advanced technology
                                            world!</a></h4>
                                    <p class="blog__desc">That may be true, but today, almost half a century later, Gary
                                        Eagle says it
                                        was
                                        only part of the story...</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #4 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/4.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Design</a><a href="#">Tips</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Oct 24, 2017</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">7 Signs You’re Not A Good UX Designer
                                            Yet!Discussion</a></h4>
                                    <p class="blog__desc">UX Designer is still a relatively profession, and one that is
                                        still being
                                        defined.
                                        Emilia suggests it is an often...</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #5 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/5.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Money</a><a href="#">Tips</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Oct 27, 2017</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">15 Money Tips To Make You Rich In the end of
                                            2019</a></h4>
                                    <p class="blog__desc">To make 2019 your most lucrative year yet, you may have to do some
                                        things
                                        differently than what you've...</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/6.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Travel</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Oct 24, 2017</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Don’t miss Top Things To Do In San Francisco </a>
                                    </h4>
                                    <p class="blog__desc">As the shimmering "City by the Bay," San Francisco’s distinctive
                                        terrain –
                                        water
                                        on one side, hills on the other..</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #7 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/7.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Business</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Jan 20, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Four ways to cheer yourself up on Blue Monday!</a>
                                    </h4>
                                    <p class="blog__desc">The third Monday of January is supposed to be day of year. Whether
                                        you
                                        believe that or not....</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Blog Item #8 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="assets/images/blog/grid/8.jpg" alt="blog image">
                                    </a>
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <div class="blog__meta-cat">
                                            <a href="#">Modern</a><a href="#">Photography</a>
                                        </div><!-- /.blog-meta-cat -->
                                        <span class="blog__meta-date">Oct 18, 2017</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Old cameras can capture images better than nowdays
                                            camera!</a>
                                    </h4>
                                    <p class="blog__desc">Actually, Woodstock was not the first outdoor festival to feature
                                        multiple
                                        bands
                                        over several days performing...</p>
                                    <a href="#" class="btn btn__secondary btn__link">Read More</a>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <nav class="pagination-area">
                                <ul class="pagination justify-content-center mt-30 mb-30">
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav><!-- .pagination-area -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar sidebar-wide">
                        <div class="widget widget-search">
                            <div class="widget__content">
                                <form class="widget__form-search">
                                    <input type="text" class="form-control" placeholder="Type and hit enter ...">
                                    <button class="btn" type="submit"><i class="york-search"></i></button>
                                </form>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-search -->
                        {{-- <div class="widget widget-about">
                            <h5 class="widget__title">About Us</h5>
                            <div class="widget__content">
                                <img src="assets/images/blog/grid/10.jpg" alt="img">
                                <p>We are York, our strategists will help you set an objective and choose your tools,
                                    developing a
                                    plan for your business. </p>
                                <a href="#" class="btn btn__secondary btn__link">Read More</a>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-about --> --}}
                        <div class="widget widget-categories">
                            <h5 class="widget__title">categories</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="#">Social Analytics</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Engagement</a></li>
                                    <li><a href="#">Listening</a></li>
                                    <li><a href="#">Collaboration</a></li>
                                    <li><a href="#">Web & Mob Applications</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
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
                        <div class="widget widget-posts">
                            <h5 class="widget__title">Recent Posts</h5>
                            <div class="widget__content">
                                <!-- post item #1 -->
                                <div class="widget-post-item">
                                    <div class="widget__post-img">
                                        <a href="#"><img src="assets/images/blog/thumbs/1.jpg" alt="product"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget__post-content">
                                        <span class="widget__post-date">Oct 15, 2017</span>
                                        <h6 class="widget__post-title"><a href="#">Four ways to cheer yourself up</a></h6>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                                <!-- post item #2 -->
                                <div class="widget-post-item">
                                    <div class="widget__post-img">
                                        <a href="#"><img src="assets/images/blog/thumbs/2.jpg" alt="product"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget__post-content">
                                        <span class="widget__post-date">Oct 15, 2017</span>
                                        <h6 class="widget__post-title"><a href="#">Old cameras can capture images</a></h6>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                                <!-- post item #3 -->
                                <div class="widget-post-item">
                                    <div class="widget__post-img">
                                        <a href="#"><img src="assets/images/blog/thumbs/3.jpg" alt="product"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget__post-content">
                                        <span class="widget__post-date">Oct 15, 2017</span>
                                        <h6 class="widget__post-title"><a href="#">New subway line has the most advanced</a>
                                        </h6>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-posts -->
                        {{-- <div class="widget widget-instagram">
                            <h5 class="widget__title">Inastagram</h5>
                            <div class="widget-content">
                                <ul class="instagram__images list-unstyled">
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/1.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/2.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/3.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/4.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/5.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <img src="assets/images/portfolio/gallery-thumbs/6.jpg" alt="instagram">
                                        <div class="img__overlay"><a href="#">
                                                <div class="dotted__line dotted__white"><span></span></div>
                                            </a></div>
                                    </li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-instagram --> --}}
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog Grid -->
@endsection
