@extends('layouts.main')

@section('container')

<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>In this box there is an address, email, telephone that can be contacted and there is a map of the
                location to make it easier to find me.</p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-12 d-flex align-items-lg-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Tanah embet, Batulayar, West Lombok</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>yudatoanoy1122@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+62 82 340 335 292</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.4300755887091!2d116.0709342291506!3d-8.526512373334619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc192d4c7fb15%3A0xbe7c31387f1ff438!2sWARUNG%20TUAK%20WANGI!5e0!3m2!1sid!2sid!4v1636668216335!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection