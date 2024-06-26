@extends('layout.app')

@section('content')
<section class="hero-banner"
style="background-image: url('{{ asset('asset/img/banner.jpg') }}'); background-size: cover; background-position: center;">
<div class="container">
<div class="row align-items-center" style="height: 100vh;">
    <div class="col-lg-7 text-center">
        <h1 id="typing-text" class="display-4 text-white font-weight-bold"></h1>
        <p  class="lead text-white">Your Premier cleaning,nannies,care  and home assistant providers</p>
    </div>
</div>
</div>
</section>


    <section class="cta-section pt-80 pb-80" id="about">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-thumb">
                        <img src="{{ URL::asset('https://media.istockphoto.com/photos/young-woman-nurse-explaining-information-to-man-patient-in-wheelchair-picture-id1271328971?k=20&m=1271328971&s=612x612&w=0&h=pSjrtgvC-8R_6TJy05eMqvO3eTo0obcaB2kvjmaGsCM=') }}"
                        alt="image">
                    </div>
                </div>
                <div class="col-lg-5 text-lg-start text-center">
                    <h2 class="cta-title">About Us</h2>
                      <p class="mt-3 text-black" style="font-size: 20px;"> Humucare is your ultimate destination for top-quality cleaning and care services. Our dedicated team consists of caregivers, nannies, cleaners, and childminders who are committed to providing exceptional assistance and support. With a focus on cleanliness and hygiene, we ensure that your home, school, office, or any other space receives the best cleaning service possible.
                    </p>
                    <a href="/humcareform" class="btn btn--base mt-4">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section pt-80 pb-80">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-thumb">
                        <img src="{{ URL::asset('https://www.jncsinc.com/wp-content/uploads/2020/08/Medical-and-Healthcare-Cleaning.jpg') }}"
                        alt="image">
                    </div>
                </div>
                <div class="col-lg-5 text-lg-start text-center">
                    <h3 class="cta-title">Our Services</h3>
                      <p class="mt-3 text-black" style="font-size: 20px;">Humucare is your ultimate destination for top-quality cleaning and care services. Our dedicated team consists of caregivers, nannies, cleaners, and childminders who are committed to providing exceptional assistance and support. With a focus on cleanliness and hygiene, we ensure that your home, school, office, or any other space receives the best cleaning service possible.
                    </p>
                    <br>
                    <h2 class="cta-title">Sponsorship Assistance </h2>
                    <p class="mt-3 text-black" style="font-size: 20px;">In addition to our caregiving and cleaning services, Humucare also provides assistance to individuals looking for sponsorship. Whether you're seeking sponsorship for employment or other purposes, our team is here to guide you through the process and offer support every step of the way.</p>
                    <a href="#s" class="btn btn--base mt-4">More Info >></a>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section pt-80 pb-80">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-thumb">
                        <img src="{{ URL::asset('https://media.istockphoto.com/photos/medical-staff-around-the-world-ethnically-diverse-headshot-portraits-picture-id1215908851?k=20&m=1215908851&s=612x612&w=0&h=sQwJ2clW0NeAAnCscoJg2GwHUNMpKqxh9l2gcc7-KH8=') }}"
                            alt="image">
                    </div>
                </div>
                <div class="col-lg-5 text-lg-start text-center">
                    <h2 class="cta-title">Over 20,000+ Health workers Registered with Us.</h2>
                      {{-- <p class="mt-3 text-black" style="font-size: 20px;">kindly supscribe for any package</p> --}}
                    {{-- <a href="/humcareform" class="btn btn--base mt-4">Register Now</a> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section pt-80 pb-80">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-thumb">
                        <video controls autoplay width=100%; height=auto; poster="https://pix4free.org/assets/library/2021-01-21/originals/duty_of_care.jpg">
                            <source src="{{ asset('asset/video/3.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                    </div>
                </div>
                <div class="col-lg-5 text-lg-start text-center">
                    <h2 class="cta-title">Duty of a Care Online Training Class<Video></Video></h2>
                      {{-- <p class="mt-3 text-black" style="font-size: 20px;">kindly supscribe for any package</p> --}}
                    {{-- <a href="/humcareform" class="btn btn--base mt-4">Register Now</a> --}}
                </div>
            </div>
        </div>
    </section>




    <div class="main-wrapper">
        <section class="pt-80 pb-80 dark--overlay bg_img"
            style="background-image: url({{ URL::asset('assets/images/frontend/feature/610f83644ebec1628406628.jpg') }}"
            id="r">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="section-title text-white">Testimonials</h2>
                            <!--<p class="mt-2 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi mollitia saepe eos facere numquam ut, minima animi distinctio at maiores veritatis perferendis magni.</p>-->
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!-- <img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/>-->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Mr Freshermel</h4>
                                <p class="mt-2 text-white">"HUMUCARE is a reputable and reliable care organization that
                                    their care sponsorship program is second to none. Tested and trusted as the well being
                                    of the elderly and those who needs support medically one way or the other is what drives
                                    her dedication. LATMO "</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!-- <img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/>-->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Mrs Nafisat seriki</h4>
                                <p class="mt-2 text-white">"Humucare is a legit agency,They help source for care homes
                                    looking to employ caregivers and they are very good at what they do,No regret whatsoever
                                    with humucare.i give them a 10/10."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!-- <img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Jane Smith</h4>
                                <p class="mt-2 text-white">"I didnt know what to do about my health issues. I found that
                                    this team was just who was looking
                                    for. They are freindly, professional, and they really care. "</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Abiola Oredapo</h4>
                                <p class="mt-2 text-white">"If your looking for some compassionate, caring people. this is
                                    the team I highly recommend. Their freindliness and professionalism is what I love about
                                    them."</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Mr Delapo Adebayo</h4>
                                <p class="mt-2 text-white">"Humucare assisted
                                    Me and my farmily
                                    To get health care
                                    Job in a nice company
                                    And support in the visa process
                                    Use Humucare they are the best."</p>
                            </div>
                            <br>





                            <div class="elfsight-app-c5c465de-3d59-4795-a1ce-5d70fb33959d"></div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Aderibigbe Eniola</h4>
                                <p class="mt-2 text-white">"The first time I was introduce to
                                    Humucare by a friend
                                    To assist me in getting a Health care job from the UK
                                    I was a bit skeptical and scared if it a froud
                                    Company. But I just use faith
                                    And everything became successful
                                    Use Humucare&cleaning Agency ,they are trustworthy"</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/> -->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Mrs Mary David</h4>
                                <p class="mt-2 text-white">"Humucare
                                    Is d best cleaning company
                                    They clean my house
                                    To the best of my taste
                                    Beautiful cleaners and patient"</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card text-center">
                            <div class="feature-card__icon">
                                <!--<img src="{{ URL::asset('assets\images\employerLogo\6121088edc0e91629554830.jpg') }}"/>-->
                            </div>
                            <div class="feature-card__content">
                                <h4 class="text-white">Close Deal</h4>
                                <p class="mt-2 text-white">Give customers a reason to do business with you</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section pt-80 pb-80">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="cta-thumb">
                            <img src="{{ URL::asset('https://khhomecare.com/wp-content/uploads/2023/03/why-featured.jpg') }}"
                            alt="image">
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-start text-center">
                        <h2 class="cta-title">Why Choose Humucare</h2>
                          <p class="mt-3 text-black" style="font-size: 20px;">•⁠ ⁠Experienced and Supportive Assistance: Beyond just cleaning, our team provides companionship and one-on-one attention to foster a caring and trustworthy relationship with our clients. We understand that each individual has unique needs, and we strive to develop meaningful connections based on trust and compassion.
                            <br><br>
                            •⁠  ⁠Personalized Care Plans: We believe that no two individuals are alike, which is why we offer personalized care plans tailored to your specific needs. Our goal is to ensure that you feel comfortable and supported in your own space, whether you need assistance with daily tasks or ongoing care.

                        </p>
                        {{-- <a href="/humcareform" class="btn btn--base mt-4">Register Now</a> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-80 pb-80 section--bg2">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 pe-lg-5" id="s">
                        <div class="package-details-wrapper">
                            <h2 class="title text-white">Our Cleaning  Services</h2>
                            <!-- <p class="mt-3 text-white">kindly supscribe for any package</p>-->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="content">
                                            <h4 class="package-card__name">
                                                 * Vacuum and mop floors<br>
                                                 * Dust and wipe surfaces<br>
                                                 * Clean and sanitize bathrooms<br>
                                                 * Clean and sanitize kitchen<br>
                                                 * Empty trash cans and replace liners<br>
                                                 * Clean and sanitize bedrooms<br>
                                                 * Clean and sanitize living room<br>
                                                 * Clean and sanitize dining room<br>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="content">
                                            <h4 class="package-card__name">
                                                 * Vacuum and mop floors<br>
                                                 * Dust and wipe surfaces<br>
                                                 * Clean and sanitize bathrooms<br>
                                                 * Fridge cleaning <br>
                                                 * Empty trash cans and replace liners<br>
                                                 * Flower Cleaning<br>
                                                 * Private Car Washing<br>
                                                 * Diswashing<br>
                                                 * Deep Cleaning<br>
                                                 * House Shopping<br>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-80 pb-80 section--bg2" id="a">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 pe-lg-5">
                        <div class="package-details-wrapper">
                            <h2 class="title text-white">Please kindly download the two form&#039;s, and fill it with a
                                valid information and submit to the email below; agency@humucarecleaning.co.uk.</h2>
                            <!-- <p class="mt-3 text-white">kindly supscribe for any package</p>-->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Humucare Job Application Form</h3>

                                        </div>
                                    </div>

                                    <div class="package-card__footer">
                                        <a href="/download2" class="btn btn--dark w-100 mt-4 planSubscribe">Download
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Humucare Cleaner Application Form</h3>

                                        </div>
                                    </div>

                                    <div class="package-card__footer">
                                        <a href="/download" class="btn btn--dark w-100 mt-4 planSubscribe">Download
                                            Now</a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Humucare Time Sheet Form.<br>Please note do not
                                                download, on till the job offer is been granted.</h3>

                                        </div>
                                    </div>

                                    <div class="package-card__footer">
                                        <a href="/download3" class="btn btn--dark w-100 mt-4 planSubscribe">Download
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-80 pb-80 section--bg2" id="c">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 pe-lg-5">
                        <div class="package-details-wrapper">
                            <h2 class="title text-white">Our Other Awesome Consultation Services                            </h2>
                            <!-- <p class="mt-3 text-white">kindly supscribe for any package</p>-->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gy-4 justify-content-center">


                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name"> Visa Application </h3>
                                            {{-- <div class="package-card__price"> £5 <sub> / for other international
                                                    countries</sub></div> --}}
                                        </div>
                                    </div>
                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Ticket Application </h3>
                                            {{-- <div class="package-card__price">£5 <sub>/ for other international
                                                    countries</sub></div> --}}
                                        </div>
                                    </div>


                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Accommodation Application</h3>
                                            {{-- <div class="package-card__price">£5 <sub>/ for other international
                                                    countries</sub></div> --}}
                                        </div>
                                    </div>
                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name"> Global Talent Visa </h3>
                                            {{-- <div class="package-card__price">£5 <sub>/ for other international
                                                    countries</sub></div> --}}
                                        </div>
                                    </div>
                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Lawyer/Accountant Assistant Application</h3>
                                            {{-- <div class="package-card__price">£50<sub>/ for other international
                                                    countries</sub></div> --}}
                                        </div>
                                    </div>
                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package-card">

                                    <div class="package-card__top">
                                        <div class="icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="package-card__name">Forklift Service</h3>
                                            {{-- <div class="package-card__price">₦100,000<sub>/for Nigerians</sub></div> --}}
                                        </div>
                                    </div>
                                    <div class="package-card__content">
                                        <ul class="package-card__feature-list">
                                            <li>Get a Quote on Our Forklift Service
                                                {{-- <span class="badge badge--base">guaranteed
                                                    visa</span> --}}
                                                </li>
                                    </div>
                                    <div class="package-card__footer">
                                        <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request for a Quoet</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="package-card">

                                <div class="package-card__top">
                                    <div class="icon">
                                        <i class="las la-user"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="package-card__name">Health Workers & Student's</h3>
                                        {{-- <div class="package-card__price">£50<sub>/ for other international countries</sub>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="package-card__content">
                                    <ul class="package-card__feature-list">
                                        <li>Full job and School Description<span class="badge badge--base">guaranteed
                                                visa</span></li>
                                </div>
                                <div class="package-card__footer">
                                    <a href="/serviceRequest" class="btn btn--dark w-100 mt-4 planSubscribe">Request for a Quote</a>

                                    //paypal button
                                    {{-- <a href="javascript:void(0)" data-bs-toggle="modal" data-plan_id="1"
                                        data-bs-target="#exampleModal"
                                        class="btn btn--dark w-100 mt-4 planSubscribe">Request </a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Modal1 -->
        <div class="modal fade custom--modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AYgUPAKrnn3sQqrOWg8HEayjK_Li5KzAUrSfAO9LP4QwjIIo-IgXE2dOyi0h4KQ-rJrD37Qx13x0FTsW&enable-funding=venmo&currency=GBP"
                        data-sdk-integration-source="button-factory"></script>
                    <script>
                        function initPayPalButton() {
                            paypal.Buttons({
                                style: {
                                    shape: 'rect',
                                    color: 'gold',
                                    layout: 'vertical',
                                    label: 'paypal',

                                },

                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            "description": "Consultation fee\n£ 100",
                                            "amount": {
                                                "currency_code": "GBP",
                                                "value": 1
                                            }
                                        }]
                                    });
                                },

                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(orderData) {

                                        // Full available details
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                        // Show a success message within this page, e.g.
                                        const element = document.getElementById('paypal-button-container');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                        // Or go to another URL:  actions.redirect('thank_you.html');

                                    });
                                },

                                onError: function(err) {
                                    console.log(err);
                                }
                            }).render('#paypal-button-container');
                        }
                        initPayPalButton();
                    </script>

                </div>
            </div>
        </div>

        <!-- Modal2 -->
        <div class="modal fade custom--modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h4 align="center"><strong>Please kindly transfer the exact amount to the bank account
                            below.</strong><br><br>
                        <strong>Bank Name:</strong> Polaris<br>
                        <strong>Account Name:</strong> Usman tolani<br>
                        <strong>Account Number: </strong>3049863796
                    </h4>
                </div>
            </div>
        </div>

        <!-- Modal3 -->
        <div class="modal fade custom--modal" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <h4 align="center"><strong>Important Notice !!!</strong><br> From 5hours and above is £15/hour and for
                        less than 5hour is £17/hour.<br><br><br>

                        Please Kindly send the correct amount to the acoount details below;

                        <br>
                        <strong> Humucare&cleaning agency limited<br>
                            Sort code: 040370<br>
                            Bank Name:Anna.
                        </strong><br><br>

                        <strong>Note !!!</strong> <br>Please after successfull transfer kindly send proof of payment e.g
                        screenshot of debit alert to this email "agency@humucarecleaning.co.uk"
                    </h4>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AYgUPAKrnn3sQqrOWg8HEayjK_Li5KzAUrSfAO9LP4QwjIIo-IgXE2dOyi0h4KQ-rJrD37Qx13x0FTsW&enable-funding=venmo&currency=USD"
                        data-sdk-integration-source="button-factory"></script>
                    <script>
                        function initPayPalButton() {
                            paypal.Buttons({
                                style: {
                                    shape: 'rect',
                                    color: 'gold',
                                    layout: 'vertical',
                                    label: 'paypal',

                                },

                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            "amount": {
                                                "currency_code": "USD",
                                                "value": 1
                                            }
                                        }]
                                    });
                                },

                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(orderData) {

                                        // Full available details
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                        // Show a success message within this page, e.g.
                                        const element = document.getElementById('paypal-button-container');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                        // Or go to another URL:  actions.redirect('thank_you.html');

                                    });
                                },

                                onError: function(err) {
                                    console.log(err);
                                }
                            }).render('#paypal-button-container');
                        }
                        initPayPalButton();
                    </script>

                </div>
            </div>
        </div>





        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="section-title">Our Latest & Previous Jobs</h2>
                            <!-- <p class="mt-2 ">Hic tenbus sequi. sddd</p>-->
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post">
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 27 Oct 2022</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('https://media.istockphoto.com/photos/are-you-enjoying-your-breakfast-picture-id1165371469?k=20&m=1165371469&s=612x612&w=0&h=9VNP-nNVrqe2l6X9EGwfGDYd4K_BPJtnkgWb555VWKs=') }}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>
                            <br>
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 27 Jan 2022</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('asset/img/c1.jpeg') }}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>
                            <br>

                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 28 Oct 2022</span>
                                <a href="" class="d-block h-100">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5_yh476W1q5JS5VtlRzn72vIMD7NEgfswaQ&usqp=CAU"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>


                            <div class="blog-post__content">
                                <!--<h4 class="blog-post__title"><a href="blog/26/deleniti-animi-est-ipsum-excepturi-ab-modi-minus">Deleniti, animi est ipsum excepturi ab modi minus.</a></h4>
                                <p class="mt-2">dolor sit amet consectetur adipisicing elit. Consequatur incidunt beatae culpa t...</p>
                                <a href="blog/26/deleniti-animi-est-ipsum-excepturi-ab-modi-minus" class="text--base text-decoration-underline mt-4">Read More</a>-->

                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post">
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 30 Nov 2022</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('https://media.istockphoto.com/photos/portrait-of-senior-woman-and-her-mixed-race-female-caregiver-picture-id1180634974?k=20&m=1180634974&s=612x612&w=0&h=EaUD9zNOgMvakXISHf5jQQ9dvKD8LTllG5Og14a6qUo=') }}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>

                        </div>
                        <br>
                        <div class="blog-post__thumb rounded-3">
                            <span class="blog-post__date"><i class="las la-calendar"></i> 08 Aug 2022</span>
                            <a href="" class="d-block h-100">
                                <img src="https://www.supergcrenovation.com/wp-content/uploads/2020/02/1.jpg"
                                    alt="blog image" class="w-100 h-100 object-fit--cover">
                            </a>
                        </div>
                        <br>
                        <div class="blog-post__thumb rounded-3">
                            <span class="blog-post__date"><i class="las la-calendar"></i> 08 Dec 2022</span>
                            <a href="" class="d-block h-100">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRez3oSZod8gW0gYhjTzkHQsiXQbqS40jpr3A&usqp=CAU"
                                    alt="blog image" class="w-100 h-100 object-fit--cover">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post">
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 08 Aug 2023</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('https://media.istockphoto.com/photos/senior-woman-sitting-in-chair-and-laughing-with-nurse-in-retirement-picture-id1047536650?k=20&m=1047536650&s=612x612&w=0&h=PZFyzG7mwRkMKSbyelxI-_0E-sk9iSCoQSi_sLv9bHI=') }}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>
                            <br>
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 08 Jan 2024</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('https://cleaningfast.co.uk/wp-content/uploads/2017/03/Regular-Home-Cleaning-Services-London-768x768.jpg') }}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>
                            <br>
                            <div class="blog-post__thumb rounded-3">
                                <span class="blog-post__date"><i class="las la-calendar"></i> 28 March 2024</span>
                                <a href="" class="d-block h-100">
                                    <img src="{{ URL::asset('asset/img/folklift.jpeg')}}"
                                        alt="blog image" class="w-100 h-100 object-fit--cover">
                                </a>
                            </div>
                            <div class="blog-post__content">
                                <!--<h4 class="blog-post__title"><a href="blog/63/consequatur-incidunt-beatae-culpa-temporibus-officiis-quidem-illo-inventore-quam-vitae-unde">Consequatur incidunt beatae culpa temporibus officiis quidem! Illo inventore quam vitae unde</a></h4>
                                <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur incidunt b...</p>
                                <a href="blog/63/consequatur-incidunt-beatae-culpa-temporibus-officiis-quidem-illo-inventore-quam-vitae-unde" class="text--base text-decoration-underline mt-4">Read More</a>-->
                            </div>

                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </section>

    </div>



    <section class="pt-100 pb-100" id="comment">
        <div class="container">
            <div class="row gy-4">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=19 grove Birmingham B219EX&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://piratebay-proxys.com/">Piratebay</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_iframe {
                            height: 400px !important;
                        }
                    </style>
                </div>

            </div>
            <div class="row mt-5 gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <div class="contact-item__icon">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                        <div class="contact-item__content">
                            <h5 class="mb-2">Office Address</h5>
                            <p>Grove avenue Birmingham
                                B21 9EX</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <div class="contact-item__icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="contact-item__content">
                            <h5 class="mb-2">Phone Number</h5>
                            <p><a href="tel:+44 01214484501">+44 01214484501</a><br>
                                <a href="tel:+44 01214484501">+44 7485705519</a><br>
                                <a href="tel:+44 7449688883">+44 7449688883</a><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <div class="contact-item__icon">
                            <i class="las la-envelope"></i>
                        </div>
                        <div class="contact-item__content">
                            <h5 class="mb-2">Email Address</h5>
                            <p><a href="/cdn-cgi/l/email-protection#781c1d1517381f15191114561b1715"><span
                                        class="__cf_email__"
                                        data-cfemail="c5a1a0a8aa85a2a8a4aca9eba6aaa8">agency@humucarecleaning.co.uk</span></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script>
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if (!isChrome) {
            $('#iframeAudio').remove()
        } else {
            $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background
        }
    </script>

    <script>
        const text = "WELCOME TO HUMUCARE.";
        let index = 0;
    const speed = 100;

    function typeText() {
        if (index < text.length) {
            document.getElementById("typing-text").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeText, speed);
        }
    }

    typeText();
    </script>
@endsection
