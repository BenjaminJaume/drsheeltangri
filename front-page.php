<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto my-auto">
            <div class="text-center py-5">
                <h1 class="display-4 font-manrope text-uppercase font-white font-weight-bold m-0">
                    Dr. Sheel Tangri
                </h1>

                <h3 class="font-rubik text-peter-river font-italic mb-5">
                    Introducing the N.O.T. Technique
                </h3>
                <a href="/get-started" alt="" class="btn btn-primary hvr-glow btn-lg rounded-0">
                    Free eBook
                </a>

                <a href="#presentation" alt="" class="btn btn-outline-primary hvr-glow btn-lg rounded-0">
                    Learn More
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 p-0">
            <!-- <iframe width="100%" height="500px"src="https://www.youtube.com/embed/KRFdfcNjj5Q?controls=0?autoplay=1?loop=1" frameborder="0" allow="autoplay">
            </iframe> -->
        </div>
    </div>
</div>

<hr class="w-75 my-5" id="presentation" />

<article class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 font-manrope text-uppercase text-center text-peter-river font-weight-bold mt-0">
                N.O.T. Presentation
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-auto mx-auto my-auto pb-5 pb-lg-0">
            <?php echo wp_get_attachment_image(60, '', false, 'class=img-fluid frame'); ?>
        </div>
        <div class="col-12 col-lg-8 my-auto">
            <p class="h4  text-center text-lg-left m-0 p-0">
                <span class="h3 font-weight-light">
                    Neural Organization Technique resets your body’s nervous system programs so
                    that it can return to its full potential.<br /><br />
                </span>

                <span class="h5 font-weight-light">
                    There are circuits and pathways in and on the surface of the body that allow
                    it to function throughout life, much like a computer. When one receives a
                    strong hit to the head or body, the nervous system programs can get
                    neurologically dis-organized and health eventually diminishes.<br /><br />

                    N.O.T was developed in 1979 by Dr. Carl Ferreri (d.2007), a chiropractic
                    kinesiologist who observed that there are 3 basic programs that the body
                    uses to function. They are the defensive or fight and flight system, the
                    feeding or digestive system, and the reproductive or hormonal system.
                    Almost all health conditions known to the human involve dysfunction of
                    at least one of these categories. (see video)
                </span>
            </p>
        </div>
    </div>
</article>

<hr class="w-75 my-5" id="condition-treated" />

<article class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 font-manrope text-uppercase text-center text-peter-river font-weight-bold mt-0">
                Conditions Treated
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10">
            <ul>
                <li class="font-big font-manrope font-weight-light my-2">
                    Head traumas, injuries and concussions
                </li>
                <li class="font-big font-manrope font-weight-light my-2">
                    Chronic headaches/migraines and jaw or TMJ problems
                </li>
                <li class="font-big font-manrope font-weight-light my-2">
                    Chronic neck, shoulder, low back and hip problems, including sciatica and disc degeneration
                </li>
                <li class="font-big font-manrope font-weight-light my-2">
                    Slow healing injuries from vehicle, work related or sports accidents
                </li>
            </ul>
        </div>
        <div class="col-auto mx-auto my-auto my-3">
            <a href="/conditions-treated" alt="" class="btn btn-primary btn-lg hvr-glow rounded-0">
                Learn More
            </a>
        </div>
    </div>
</article>

<div class="container-fluid bg-dark py-5 m-0">
    <div class="row">
        <div class="col-auto mx-auto my-auto text-center">
            <a href="/consultation" alt="" class="btn btn-primary btn-lg font-manrope rounded-0 text-uppercase font-bigger">
                Book your appointment today
            </a>
        </div>
    </div>
</div>

<article class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 font-manrope text-uppercase text-center text-peter-river font-weight-bold m-0">
                Techniques
            </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image(65, '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                Nutrition
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-primary hvr-glow rounded-0">
                Learn More
            </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image(66, '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                Meditation
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-primary hvr-glow rounded-0">
                Learn More
            </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image(67, '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                Other Techniques
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-primary hvr-glow rounded-0">
                Learn More
            </a>
        </div>
    </div>
</article>

<?php get_footer(); ?>