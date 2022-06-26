@extends('layouts.main')
@section('container')

<!-- Desc Section -->
<section>
    <div class="container" >
        <span id="aboutUs"></span>
        <p class="title-section-primary pt-5">About Us</p>
        <div class="d-flex align-items-center justify-content-center flex-column pb-1">
            <img src="/assets/logo.png" class="about-logo mb-5" alt="plane-logo">
            <p class="title-section-primary" style="color: var(--black-color)">PT. Tiketku,inc.</p>
            <p class="font-sm text-justify mt-1">
            tiketku is the first online travel agent in Indonesia which was founded in 2011 and based in Jakarta, Indonesia. Our service takes advantage of the development of the digital world to make it easier for you to book promo airline tickets or check flight ticket prices from anywhere and anytime. We sell airline tickets online with a wide selection of airlines, such as airline tickets for AirAsia, Singapore Airlines, Qatar Airways, AirCanada, Japan Airlines, Malaysia Airlines, Cebu Pacific, Fly Emirates, United Airlines, Saudia Airlines, Turkish Airlines  and many more.
            </p>
            <p class="font-sm text-justify">It's also very easy to order cheap airline tickets and promo plane tickets on tiket.com. All you have to do is go to the flight ticket booking page, then enter your choice of departure airport and destination airport. Also enter your departure date. If you want to get a cheaper PP flight ticket price with the Smart Trip feature, don't forget to activate the tick in the return flight date column. Finally, don't forget to enter the number of passengers who will be joining you to fly with you.</p>
        </div>
        <p class="title-section-primary pt-5" id="whyTicket">Why Tiketku?</p>
        <div class="row align-items-center pb-5">
            <div class="col-sm-4 col-12">
                <div class="d-flex flex-column pr-5">
                    <p class="title-section-secondary">What Our Customer Say About Us</p>
                    <p class="font-sm">“I am a traveller and tiketku helped me so much in finding attractive tourist destinations and worth the price. Recommend it!</p>
                    <p class="font-extra-sm font-black font-bold">Sara Bruyne ● <span class="font-regular">Traveller Enthusiast</span></p>
                    <div class="d-flex align-items-center gap-2">
                        <img src="assets/star.png" class="star-icons" alt="">
                        <img src="assets/star.png" class="star-icons" alt="">
                        <img src="assets/star.png" class="star-icons" alt="">
                        <img src="assets/star.png" class="star-icons" alt="">
                        <img src="assets/star.png" class="star-icons" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-2 col-12 mt-4">
                <img src="assets/about.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Of Desc Section -->

<!-- FAQ Section -->
<section>
    <div class="container py-5" id="FAQ">
        <p class="title-section-primary py-2">FAQ</p>
        <p class="title-section-secondary">Frequently Asked Question</p>
    </div>
</section>
<!-- End Of FAQ Section -->

<!-- Accordion Section -->
<section>
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample"> <!-- gap-3 d-flex flex-column TO ADDING GAP -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    How do I search for available flight without booking first?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">You can go directly to the home page then press "book now".</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Is there any news about our destination before we order our tickets?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">for the news feature, so far it has not been added regarding the ticket information you want to order.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    How long does it take to process my payment?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">payment processing will run quickly and in less than 1 minute.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Can I get support center to help me book a flight?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">Of course, you can enter the help menu and then contact our contact support center list.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Accordion Section -->

@endsection