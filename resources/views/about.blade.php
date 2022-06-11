@extends('layouts.main')
@section('container')

<!-- Desc Section -->
<section>
    <div class="container py-5">
        <p class="title-section-primary">About Us</p>
        <div class="d-flex align-items-center justify-content-center flex-column pb-1">
            <img src="/assets/logo.png" class="about-logo mb-5" alt="plane-logo">
            <p class="title-section-primary" style="color: var(--black-color)">PT. Tiketku,inc.</p>
            <p class="font-sm text-justify mt-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget mauris pharetra et ultrices neque ornare. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Ullamcorper a lacus vestibulum sed arcu non odio. A pellentesque sit amet porttitor eget dolor morbi non arcu. Lobortis elementum nibh tellus molestie nunc non blandit massa. Id venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Facilisis gravida neque convallis a cras semper auctor. Erat pellentesque adipiscing commodo elit at imperdiet dui. Tortor dignissim convallis aenean et. Malesuada proin libero nunc consequat interdum varius sit. Netus et malesuada fames ac turpis egestas maecenas. Morbi non arcu risus quis varius quam quisque id. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Ut tristique et egestas quis ipsum. Ipsum nunc aliquet bibendum enim facilisis. Amet cursus sit amet dictum sit amet. Faucibus vitae aliquet nec ullamcorper.
            </p>
            <p class="font-sm text-justify">Dignissim cras tincidunt lobortis feugiat vivamus at. Enim diam vulputate ut pharetra sit amet aliquam id. Ut pharetra sit amet aliquam id. Quis auctor elit sed vulputate mi sit amet. Fermentum iaculis eu non diam phasellus vestibulum lorem. Purus sit amet luctus venenatis lectus magna fringilla. Nunc non blandit massa enim nec dui nunc mattis. A arcu cursus vitae congue. Eget mi proin sed libero enim sed faucibus turpis. Odio aenean sed adipiscing diam donec adipiscing tristique risus nec. Velit sed ullamcorper morbi tincidunt ornare massa eget. Commodo nulla facilisi nullam vehicula. Mauris pharetra et ultrices neque ornare aenean euismod elementum. Nibh sed pulvinar proin gravida hendrerit. Hendrerit gravida rutrum quisque non tellus orci. Interdum velit euismod in pellentesque massa placerat duis ultricies lacus.</p>
        </div>
        <p class="title-section-primary mt-5">Why Tiketku?</p>
        <div class="row align-items-center">
            <div class="col-sm-4 col-12 mt-4">
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
    <div class="container pt-5 pb-4">
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
                <div class="accordion-body px-0">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Is there any news about our destination before we order our tickets?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    How long does it take to process my payment?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed px-0 font-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Can I get support center to help me book a flight?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-0">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Accordion Section -->

@endsection