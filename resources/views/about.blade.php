@extends('layout/base')

@section('title', 'About | Kode Koding')

@section('container')
    <!-- ========================
           page title
        =========================== -->
    <section id="page-title" class="page-title page-title-layout6 bg-overlay bg-overlay-2">
        <div class="bg-img"><img src="assets/images/banners/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h1 class="pagetitle__heading">Our Services & Business Solutions </h1>
                    <p class="pagetitle__desc">Our strategists will help you set an objective and choose your tools.</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ========================
               cta 1
            =========================== -->
    <section id="cta1" class="cta cta-1 pt-60 pb-60 text-center-xs-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h3 class="cta__title">Do you want to work with us?</h3>
                    <p class="cta__desc">Developing a plan that is custom-built for your business.</p>
                </div><!-- /.col-lg-9 -->
                <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
                    <h3 class="cta__title">Give Us A Call!</h3>
                    <p class="cta__desc"><strong>+62 82331550064 | Chinta</strong></p>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta 1 -->
    <!-- ==========================
                    contact 1
                =========================== -->
    <section id="contact1" class="contact p-0">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="contact__banner align-v-h bg-overlay">
                        <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                        <div class="heading text-center">
                            <div class="heading__shape heading__shape-white"></div>
                            <h2 class="heading__title color-white">Or Email Us!! <br> Don’t Hesitate To Ask</h2>
                            <div class="divider__line divider__white"></div>
                        </div><!-- /.heading -->
                    </div><!-- /.contact-banner -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                    <div class="inner-padding">
                        <div class="heading">
                            <h2 class="heading__title lh-1 mb-50">Write To Us</h2>
                        </div><!-- /.heading -->
                        <form method="post" action="assets/php/contact.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                            name="contact-name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="email" class="form-control" placeholder="Email"
                                            id="contact-email" name="contact-email" required></div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Phone"
                                            id="contact-Phone" name="contact-phone" required></div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Subject"
                                            id="contact-subject" name="contact-subject" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-30"><textarea class="form-control" placeholder="Message"
                                            id="contact-messgae" name="contact-messgae" required></textarea></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__rounded btn__primary btn__hover3">Send
                                        Message</button>
                                </div><!-- /.col-lg-12 -->
                                <div class="contact-result"></div>
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact 1 -->
@endsection
