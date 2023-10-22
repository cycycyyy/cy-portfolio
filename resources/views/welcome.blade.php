@extends('master-layout')
@section('content')
@section('title', 'cy. | Home')

<div class="header-message container mt-4">
    <div class="d-lg-flex gap-4 align-items-center">
        <div class="" style="width: 100%; height: 60vh;">
            <img src="{{ URL::asset('imgs/Portrait-1.jpg') }}" alt="" class="portrait-1 img-cover">
        </div>
        <div class="p-4">
            <h1 class="display-2" style="color:#718238;"><span class="typed-text"></span><span
                    class="cursor">&nbsp;</span>
            </h1>
            <h2 class="display-4">I'm Jon Cyrel.</h2>
            <h3 class="display-6">A Manila-based graphic designer specializing in product development, marketing
                collaterals, from packagings, brandings and the like, <span class="text-white-50"> with a passion for
                    singing.</span></h3>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            </button>
            <div class="modal-body">
                <div class="d-flex justify-content-end pb-3">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Close</span>
                </div>
                <div class="hs-responsive-embed-youtube"><iframe src="https://www.youtube.com/embed/yPRcuVOhP-k"
                        frameborder="0" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</div>

<section id="projects-section" class="p-3">
    <div class="container">
        <div class="section-title my-4">
            <h1 class="display-5">Latest Projects</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="card-img-holder hover-darken">
                            <a href="{{ URL::asset('imgs/projects/BabyMo-Website.jpg') }}" class="glightbox">
                                <img src="{{ URL::asset('imgs/projects/BabyMo-Website.jpg') }}" alt=""
                                    class="img-cover">
                            </a>
                        </div>
                        <div class="my-2">
                            <span class="badge bg-green">Capstone Project</span>
                            <span class="badge bg-primary">Website Development</span>
                        </div>
                        <div class="">
                            <h5 class="text-green-bold">BabyMo: Online Pediatric Immunization Monitoring and Scheduling
                                System</h5>
                            <span>Accountable for implementing front-end solutions and producing user-centered design
                                concepts for the enhancement of user interface elements and overall user
                                experience</span>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button onclick="window.open('https://babymo-vaccinate.com/')"
                            class="btn btn-sm bg-green text-light my-2 hover-darken"><i class="fas fa-link"></i> Visit
                            Link</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="card-img-holder hover-darken">
                            <a href="{{ URL::asset('imgs/projects/BabyMo-MarketingVid.jpg') }}" data-bs-toggle="modal" data-bs-target="#videoModal">
                                <img src="{{ URL::asset('imgs/projects/BabyMo-MarketingVid.jpg') }}" alt=""
                                    class="img-cover">
                            </a>
                        </div>
                        <div class="">
                            <span class="badge bg-warning my-2">Marketing Collateral</span>
                            <span class="badge bg-danger my-2">Video Editing</span>
                        </div>
                        <div class="">
                            <h5 class="text-green-bold">BabyMo Promotional Video</h5>
                            <span>It is a promotional video for BabyMo, showing the highlights and importance of the
                                website
                                features.</span>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#videoModal"
                            class="btn btn-sm bg-green text-light my-2 hover-darken"><i class="fas fa-eye"></i> View
                            Video</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="card-img-holder hover-darken">
                            <a href="{{ URL::asset('imgs/projects/BabyMo-Tarp-3.jpg') }}" class="glightbox">
                                <img src="{{ URL::asset('imgs/projects/BabyMo-Tarp-3.jpg') }}" alt=""
                                    class="img-cover">
                            </a>
                        </div>
                        <div class="">
                            <span class="badge bg-warning my-2">Marketing Collateral</span>
                        </div>
                        <h5 class="text-green-bold">BabyMo Tarpaulin Signages Mockup</h5>
                        <span>Mockup for BabyMo's Website Demo</span>
                    </div>
                </div>
            </div>
            <div class="view-all-button d-flex justify-content-center my-4">
                <button class="btn bg-green text-light hover-darken" onclick="window.open('{{ route('projects') }}')" >
                    <i class="fas fa-eye"></i> View All Projects
                </button>
            </div>
        </div>
    </div>
</section>


@include('sections.technologies')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script></script>
<script>
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Hello.", "Kumusta po.", "안녕하세요", "こんにちは"];
    const typingDelay = 200;
    const erasingDelay = 100;
    const newTextDelay = 1000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            cursorSpan.classList.remove("typing");
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            cursorSpan.classList.remove("typing");
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) textArrayIndex = 0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
        if (textArray.length) setTimeout(type, newTextDelay + 250);
    });


    // Get the maximum height of all the cards
    var maxHeight = 0;
    $('.card').each(function() {
        var cardHeight = $(this).height();
        if (cardHeight > maxHeight) {
            maxHeight = cardHeight;
        }
    });

    // Set the height of all the cards to be the same
    $('.card').height(maxHeight);
</script>

@endsection
