@extends('layout/testing-base')

@section('title', 'Kode Koding')

@section('container')
<!-- ========================
       page title
    =========================== -->
<section id="page-title" class="page-title page-title-layout2 text-center bg-overlay bg-overlay-2">
    <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <span class="pagetitle__subheading">Hello, We Are Kode Koding.</span>
                <h1 class="pagetitle__heading">Home of IT Solutions</h1>
                <br>
                <p class="pagetitle__desc" style="font-style: italic">
                    "We love what we do and we do it with passion."
                </p>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="testing-space">
    <div class="container">
        <div class="row">
            @include('image-view')
        </div>
    </div>
</section>


@endsection
