@extends('layouts.app')

@section('title', 'American Author Hub | Home')

@section('content')

    <section class="main-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span></span>
                        <h1 class="text-light">Unveil Your Story With A Premium Book Writing Company</h1>
                        <p>We provide custom book writing services without compromising on quality. Our professional
                            book writers always come up with out-of-the-box ideas and bring them to life with their engaging
                            words.
                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                        <a href="tel:+1233456789" class="project-btn phone-btn h-phone">123 456-789</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-img">
                        <img src="{{ asset('assets/imgs/main.webp') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-we-do-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>What We Do</span>
                        <h2>Help You in Becoming a Published Author</h2>
                        <p>No matter what genre you work in, our professional and experienced authors are there to
                            produce a
                            top-notch piece of literature for you. Whether it's a work of fiction, non-fiction,
                            autobiography,
                            etc., we'll edit, proofread, format, and design it for you at an affordable cost. You can
                            trust our
                            professional book writing services.
                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                        <a href="tel:+123456789" class="project-btn phone-btn h-phone-2">(123) 456-789</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="what-we-slider">
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r2.webp') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Author Website
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Author Website
                                    </h5>
                                    <p>We have a team of professional book writers that specialize in writing engaging
                                        and
                                        premium-quality web content for your author website. You can trust our
                                        exceptional writers
                                        to get the job done</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r3.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Writing <br> Services
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Writing Services
                                    </h5>
                                    <p>We strive to provide our clients with exceptional custom book writing services
                                        while
                                        focusing on attention to detail and keeping the plot intact to bring your novel
                                        ideas to
                                        life to ensure your readers remain hooked.
                                    </p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r4.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>eBook Writing & <br> Publishing
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>eBook Writing & Publishing
                                    </h5>
                                    <p>We have got your back if you are looking for professional eBook writing and
                                        publishing
                                        services. We have published over a thousand eBooks covering 30 diversified
                                        genres.
                                    </p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r5.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Cover <br> Design
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Cover Design
                                    </h5>
                                    <p>Are you looking for an engaging cover design service? You can trust professional
                                        designers
                                        who leverage cutting-edge tools to produce impeccable and unique cover designs
                                        relevant to
                                        your story.
                                    </p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r6.png') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Proofreading & <br> Editing
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Proofreading & Editing
                                    </h5>
                                    <p>We offer cost-effective proofreading and book editing services to our esteemed
                                        clients. We
                                        thoroughly proofread and edit your first drafts, chapters, and manuscripts to
                                        ensure the
                                        top-notch quality of your masterpiece.
                                    </p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r7.png') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Publishing <br> Services
                                    </h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Publishing Services
                                    </h5>
                                    <p>We help authors get their books published, covering a variety of genres,
                                        including
                                        fiction, non-fiction, children's books, novels, young adult, self-help,
                                        biographies,
                                        business books, education books, etc.
                                    </p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="choose-sec">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-2 offset-1">
                    <div class="choose-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/b1.webp') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="choose-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/b2.webp') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-head">
                        <span>Reasons to Choose American Author Hub </span>
                        <h2>Welcome to the World of Literature</h2>
                        <p>
                            We have served over 10,000 satisfied customers. This is a
                            testimony to our commitment and dedication to providing them with high-quality, premium,
                            yet cost-effective book writing services across the United States. We value our customers,
                            and their satisfaction is our priority. We listen to our consumers carefully to ensure
                            that we deliver relevant, engaging, and top-notch content to them, helping them engage
                            their readers and expand their outreach.
                            Our professional writers are at your service and would love to help fulfill your needs and
                            requirements when writing an engaging book.
                        </p>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Award-Winning Writers
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">It’s time to put your words in your readers’ mouths and
                                        provoke
                                        their emotions. Hire the services of our award-winning authors who will help
                                        bring your
                                        ideas to life with impactful storytelling.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Guaranteed Customer Satisfaction
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse" aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Guaranteed Customer Satisfaction We take great pride in providing our clients
                                        with 100%
                                        satisfaction. Our team of professionals works closely with you so that whatever
                                        you envision is
                                        captured as accurately as possible in your work.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-sec">
        <div class="banner-head">
            <h2>Take A Look at What We Offer</h2>
            <p>Diversity is what makes us the best in the business. We have industry-specific writers to cover all the
                fields so that our clients do not go away empty-handed. We make sure that our writings will not only
                help
                you but will also help your business to grow through our amazing writing. Get a quick overview of the
                services we are offering.
            </p>

        </div>
        <div class="services-sec-slider-ltr">
            <ul class="service-ltr">
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t1.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Novel Writing</h4>
                            <p>Do you know that hiring one of our novel writers will help you publish your own novel in
                                no
                                time? Get your hands on our industry-specific and genre-specific novel writing
                                professionals who
                                can help you turn your idea into a reality. Our ghostwriters are routinely mentioned on
                                major
                                media sites for their outstanding abilities.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t2.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Speech Writing</h4>
                            <p>Do you know that hiring one of our novel writers will help you publish your own novel in
                                no
                                time? Get your hands on our industry-specific and genre-specific novel writing
                                professionals who
                                can help you turn your idea into a reality. Our ghostwriters are routinely mentioned on
                                major
                                media sites for their outstanding abilities.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t3.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Wiki Writing</h4>
                            <p>Do you want to boost your website's visibility with our cost-effective, dependable, and
                                reliable
                                Wikipedia writing services? Our professional writers can produce authentic and
                                high-quality
                                content for Wikipedia, keeping in view your demands and requirements. Our experienced
                                team of
                                writers has created over 100 impactful wiki profiles and has managed to win the trust of
                                our
                                valued clients.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t4.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Movie Writing</h4>
                            <p>Our professional team of writers has provided exceptional and high-quality script writing
                                services for several award-winning movies that have raked in millions at the box office.
                                We've
                                hired some of the best screenwriters to ensure you get a flawless and engaging script
                                for your
                                movies. Our screenwriters collaborate with industry-leading producers and directors to
                                produce a
                                masterpiece for you.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t5.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Novel Writing</h4>
                            <p>Do you know that hiring one of our novel writers will help you publish your own novel in
                                no
                                time? Get your hands on our industry-specific and genre-specific novel writing
                                professionals who
                                can help you turn your idea into a reality. Our ghostwriters are routinely mentioned on
                                major
                                media sites for their outstanding abilities.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t6.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Speech Writing</h4>
                            <p>At American Author Hub , we ensure what you aim to say through your speech not only captivates
                                your
                                audience, it truly mesmerizes them into wonder toward your aims and goals. Our
                                experienced team
                                of dedicated speech writers have delivered excellence to numerous speakers that have
                                been
                                engineers of change around the world</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t3.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Wiki Writing</h4>
                            <p>Do you want to boost your website's visibility with our cost-effective, dependable, and
                                reliable
                                Wikipedia writing services? Our professional writers can produce authentic and
                                high-quality
                                content for Wikipedia, keeping in view your demands and requirements. Our experienced
                                team of
                                writers has created over 100 impactful wiki profiles and has managed to win the trust of
                                our
                                valued clients.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t2.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Movie Writing</h4>
                            <p>Our professional team of writers has provided exceptional and high-quality script writing
                                services for several award-winning movies that have raked in millions at the box office.
                                We've
                                hired some of the best screenwriters to ensure you get a flawless and engaging script
                                for your
                                movies. Our screenwriters collaborate with industry-leading producers and directors to
                                produce a
                                masterpiece for you.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="services-sec-slider-rtl">
            <ul class="service-rtl">
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t6.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Story Writing</h4>
                            <p>American Author Hub 's team consists of professional writers who can weave magic with their
                                wordplay.
                                They are the wordsmiths in the truest sense. They are incredibly proficient in their
                                genres and
                                maintain consistency in delivering excellence. Our valued clients can contact our
                                ghostwriters
                                for all their story-writing endeavors.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t5.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Song Writing</h4>
                            <p>Our team can transform your idea into a wonderfully written song that everyone will enjoy
                                listening to. Our professional song writers can give the words to your feelings and
                                produce the
                                song to your liking. Our ghostwriters have been recognized by the world's top music
                                producers
                                for writing powerful and impactful lyrics with ultimate proficiency.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t4.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Memoir Writing</h4>
                            <p>We offer professional memoir writing services to our clients. If you are planning to
                                share your
                                experiences with the world in the form of an engaging and informative memoir, we have
                                got you
                                covered. You can trust our expert memoir writers to produce a stunning piece of
                                literature that
                                you and readers will enjoy reading for a lifetime.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t3.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Nonfiction Writing</h4>
                            <p>Do you want to get your non-fiction book published? We are here to help. At American Author Hub ,
                                we
                                take pride in providing our clients with exceptional non-fiction writing services at an
                                affordable cost. Being our client, you need to share your idea with our writers, and
                                they will
                                come up with a stunning and error-free masterpiece for you. Our experts made significant
                                contributions to eminent literary journals, magazines, and newspapers.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t2.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Story Writing</h4>
                            <p>American Author Hub 's team consists of professional writers who can weave magic with their
                                wordplay.
                                They are the wordsmiths in the truest sense. They are incredibly proficient in their
                                genres and
                                maintain consistency in delivering excellence. Our valued clients can contact our
                                ghostwriters
                                for all their story-writing endeavors.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t1.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Song Writing</h4>
                            <p>Our team can transform your idea into a wonderfully written song that everyone will enjoy
                                listening to. Our professional song writers can give the words to your feelings and
                                produce the
                                song to your liking. Our ghostwriters have been recognized by the world's top music
                                producers
                                for writing powerful and impactful lyrics with ultimate proficiency.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t4.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Memoir Writing</h4>
                            <p>We offer professional memoir writing services to our clients. If you are planning to
                                share your
                                experiences with the world in the form of an engaging and informative memoir, we have
                                got you
                                covered. You can trust our expert memoir writers to produce a stunning piece of
                                literature that
                                you and readers will enjoy reading for a lifetime.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t1.webp') }}" style="width: 190px;">
                        <div class="services-sec-box-inner">
                            <h4>Nonfiction Writing</h4>
                            <p>Do you want to get your non-fiction book published? We are here to help. At American Author Hub ,
                                we
                                take pride in providing our clients with exceptional non-fiction writing services at an
                                affordable cost. Being our client, you need to share your idea with our writers, and
                                they will
                                come up with a stunning and error-free masterpiece for you. Our experts made significant
                                contributions to eminent literary journals, magazines, and newspapers.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>


    <section class="tier-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="tier-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/ban1.webp') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box active">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle">
                        <span>3,000</span>
                        <h4>Top-Tier, US-Based
                            Content Writers
                        </h4>
                        <p>Our authors go through extensive and rigorous testing and training procedures before being
                            hired by
                            our professional book writing agency. We have got some of the most celebrated writers
                            onboard from
                            across the United States.


                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle">
                        <span>10,000</span>
                        <h4>Our Customers <br>
                            Love Us
                        </h4>
                        <p>Having served more than 10,000 satisfied clients, we take pride in our professional book
                            writing
                            services that have helped us stand out from our competitors.


                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="testi-sec">
        <div class="container">
            <div class="banner-head">
                <span>Testimonials</span>
                <h2>Trust American Author Hub Company For All
                    Your Business Writing Needs
                </h2>
            </div>
            <div class="row testi-slider">
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Highly experienced team of editors & writers.
                        </h4>
                        <p>"I must say that my experience with Zach the project manager and his team was terrific. They
                            guided me along in the editing and process and were not only helpful but patient. Zach was a
                            personal pleasure to deal with. I also learned along the way and was able to even improve
                            upon my own writing and punctuation. He was always responsive to my questions and problems."
                        </p>

                        <h6>Carole Jett</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Completely satisfied with their publishing service & support.
                        </h4>
                        <p>“Kudos to the amazing team and for sure the people behind it. I've been struggling to publish
                            for years and on a fine October morning I call American Author Hub and get connected to Eddie
                            Williams. Since then they have made my dream possible and thank you Zach for being available
                            throughout the entire process, and whatever of an issue I'd, he responded me with patience
                            and dedication. I felt heard and I'm glad my book "An Art of Love" is out there and seeking
                            your love for the same!” </p>

                        <h6>Ethan Mitchell</h6>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Excellent understanding of what works for formatting & publishing.
                        </h4>
                        <p>"I created a children's book and considered it to publish as self-publishing by KDP. But it's
                            a debut book, and I worried it doesn't look professional because of poor formatting, so
                            contact American Author Hub . Most of all, Mr. Walton Pierce is an excellent manager. He helped to
                            publish them one by one as if he is a personal coach. Thank you so much!"</p>

                        <h6>Noah Martinez</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>First-Time Publishing Success!
                        </h4>
                        <p>"Eddie Williams has been very available and helpful in publishing my children's book. We had
                            a few miss communications and some editing problems but in the end the book is just as I had
                            hoped. Eddie was always courteous, patient and ready to help with all the issues this first
                            time publisher had. Thanks!" </p>

                        <h6>Aiden Clark</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--  -->
    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original, Authentic, & Genuine</span>
                <h3>Become a celebrated author of best-seller <br> books with American Author Hub Services.</h3>
                <ul class="cta-btn">
                    <li><a href="tel:+123456789">123 456-789</a> &nbsp; <a href="javascript:;" class="chat">Chat
                            Now</a></li>
                    <li><a href="mailto:info@ebook.com"><span>info@ebook.com</span></a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="touch-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>Get in touch
                        </span>
                        <h2>We Are Here To Help</h2>
                        <p>Do you want us to write on your behalf? Get in touch with us. Provide all the details
                            regarding
                            your project, and we will provide you with exceptional writing services – par excellence -
                            to
                            ensure total satisfaction.
                        </p>
                    </div>
                    {{--  <div class="clock-box">
                        <div class="row">
                            <div class="col-md-6">
                                <p>It’s easy to reach us via chat.
                                    We’re online from <span>9:00</span> to <span>23:00</span>
                                </p>
                                <ul class="watch-box  ">
                                    <li>
                                        <div class="demo">
                                            <div class="clock ui-small" data-timezone="Asia/Dubai">
                                                <div class="needle">
                                                    <span class="minutes"></span>
                                                    <span class="hours"></span>
                                                    <span class="seconds"></span>
                                                </div>
                                                <ul class="time-number">
                                                    <li><span>1</span></li>
                                                    <li><span>2</span></li>
                                                    <li><span>3</span></li>
                                                    <li><span>4</span></li>
                                                    <li><span>5</span></li>
                                                    <li><span>6</span></li>
                                                    <li><span>7</span></li>
                                                    <li><span>8</span></li>
                                                    <li><span>9</span></li>
                                                    <li><span>10</span></li>
                                                    <li><span>11</span></li>
                                                    <li><span>12</span></li>
                                                </ul>
                                                <div class="apm"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="clock-box-links">
                                    <li><a href="tel:+1233456789">
                                            123 456-789 </a></li>
                                    <li>
                                        <a href="mailto:info@ebook.com">
                                            <span class=" 92e1f3fef7e1d2f7fefbe6f7f0fdfdf9e5e0fbe6fbfcf5bcf1fdff">
                                                info@ebook.com </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="statue-img">
                                    <img src="https://authorstime.com/assets/images/statue.webp" style="padding: 30px;">
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                </div>
                <div class="col-md-5 offset-1">
                    <div class="touc-sec-form">
                        <form method="Post">
                            <input type="hidden" name="ip_address" value="103.244.176.58" />
                            <input type="hidden" name="city" value="Karachi" />
                            <input type="hidden" name="country" value="Pakistan" />
                            <input type="hidden" name="internet_connection" value="Cyber Internet Services Pakistan" />
                            <input type="hidden" name="zipcode" value="74600" />
                            <input type="hidden" name="region" value="Sindh" />
                            <input type="hidden" name="url" value="https://authorstime.com/" />
                            <input type="hidden" name="form_name" value="GET IN TOUCH FORM" />
                            <input type="hidden" name="bot_detector" value="" />
                            <input type="hidden" name="privacy_policy"
                                value="I have read the Terms & Conditions and Privacy Policy." />
                            <input type="hidden" name="policy"
                                value="By providing my contact information, I agree to receive text messages, calls, and emails from American Author Hub ." />
                            <input type="text" name="name" maxlength="30" required=""
                                placeholder="Enter Name">
                            <input type="tel" name="phone" required="" placeholder="Enter Number"
                                minlength="10" maxlength="10">
                            <input type="email" name="email" required="" placeholder="Enter Email">

                            <select name="service">
                                <option value="">Select Service</option>
                                <option value="Book Promotions">Book Promotions</option>
                                <option value="E-book Writing">E-book Writing</option>
                                <option value="Editing">Editing</option>
                                <option value="Proofreading">Proofreading</option>
                                <option value="Audio Book">Audio Book</option>
                                <option value="Author Website">Author Website</option>
                                <option value="Book Cover">Book Cover</option>
                                <option value="Book Printing">Book Printing</option>
                                <option value="Formatting">Formatting</option>
                                <option value="Ghostwriting">Ghostwriting</option>
                                <option value="Video Book Trailer">Video Book Trailer</option>
                                <option value="Publishing">Publishing</option>
                            </select>

                            <textarea name="message" placeholder="Additional Comments"></textarea>

                            <div class="form-group text-dark pt-3">
                                <input type="checkbox" class="required" name="policy_check" id="policy_check" required
                                    style="width: fit-content !important;height: auto !important;">
                                By providing my contact information, I agree to receive text messages, calls, and emails
                                from American Author Hub .
                            </div>
                            <div class="form-group text-dark">
                                <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required
                                    style="width: fit-content !important;height: auto !important;">
                                I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a>
                                and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
                            </div>
                            <button type="submit" class="btn-submit" name="sendmail">Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
