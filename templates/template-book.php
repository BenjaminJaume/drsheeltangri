<?php

/*
Template Name: Book
*/

get_header(); ?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
    }
</style>

<?php if (get_the_post_thumbnail_url()) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>
<?php } else { ?>
    <h1 class="h1 text-center font-kollektif text-uppercase text-brand my-5">
        <?php echo wp_title(''); ?>
    </h1>
<?php } ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-brand text-uppercase font-kollektif font-weight-light mb-1">
                Dr. Sheel Tangri's Let It Flow
            </h1>
            <h3 class="font-weight-light font-italic">
                Hands-on techniques for healing the body, mind and spirit
            </h3>
        </div>
    </div>
    <hr class="my-5 w-75" />
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h4 class="font-kollektif text-brand font-weight-light text-muted">
                Get the free eBook "Let it flow" in your favorite language
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 text-center mx-auto">
            <h1 class="font-kollektif">
                <?php echo wp_get_attachment_image(1320, [28, 28], false, 'class=img-fluid'); ?>
                English
            </h1>
            <a href="<?php echo wp_get_attachment_url(1314); ?>" class="btn btn-success btn-lg rounded-0 mb-2" download>
                Download
                <i class="fa fa-download"></i>
            </a>
            <p class="text-muted">
                <?php
                $file_type = wp_check_filetype(wp_get_attachment_url(1314));
                $file_size = formatBytes(filesize(get_attached_file(1314)), 2);

                echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
            </p>
        </div>
        <div class="col-12 col-md-4 text-center mx-auto">
            <h1 class="font-kollektif">
                <?php echo wp_get_attachment_image(1321, [28, 28], false, 'class=img-fluid'); ?>
                Spanish
            </h1>
            <a href="<?php echo wp_get_attachment_url(1315); ?>" class="btn btn-success btn-lg rounded-0 mb-2" download>
                Download
                <i class="fa fa-download"></i>
            </a>
            <p class="text-muted">
                <?php
                $file_type = wp_check_filetype(wp_get_attachment_url(1315));
                $file_size = formatBytes(filesize(get_attached_file(1315)), 2);

                echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
            </p>
        </div>
        <div class="col-12 col-md-4 text-center mx-auto">
            <h1 class="font-kollektif">
                <?php echo wp_get_attachment_image(1319, [28, 28], false, 'class=img-fluid'); ?>
                German
            </h1>
            <a href="<?php echo wp_get_attachment_url(1313); ?>" class="btn btn-success btn-lg rounded-0 mb-2" download>
                Download
                <i class="fa fa-download"></i>
            </a>
            <p class="text-muted">
                <?php
                $file_type = wp_check_filetype(wp_get_attachment_url(1313));
                $file_size = formatBytes(filesize(get_attached_file(1313)), 2);

                echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
            </p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 border text-center py-5">
            <p class="text-muted">
                If you would like to buy a hard copy of "Let It Flow"
                <br />
                <br />

                ISBN: ISBN 1-55212-437-1
                <br />
                List Price: US&#36;14.50, C&#36;16.00, &#128;12.00, &#163;8.50
                <br />

                100 pages; quality trade paperback (softcover); catalogue #00-0102
                <br />
                <br />


                <a href="https://www.trafford.com/Bookstore/BookDetail.aspx?BookId=SKU-000155863" alt="" target="_blank" class="btn btn-success rounded-0">
                    Buy the hard copy now
                </a>

                <br />
                <br />

                or Phone <a href="tel:1-888-232-4444">1-888-232-4444</a> (USA and Canada only) or <a href="tel:1-250-383-6864">1-250-383-6864</a>.
                <br />

                From Europe, ring our UK order desk clerk at local rate number
                <br />
                <a href="tel:08452309601">0845 230 9601</a> (UK only) or <a href="+44(0)1865722113">+44 (0)1865 722 113</a>

            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">
                Table of Contents
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 mx-auto">

            <ul class="list-group">
                <li class="list-group-item">
                    Foreword by Dr. Carl A. Ferreri
                </li>
                <li class="list-group-item">
                    Introduction: A Model for Holistic Health and Health Care
                </li>
                <li class="list-group-item">
                    Chapter 1: A Way To The Source
                </li>
                <li class="list-group-item">
                    Chapter 2: My Approach To Health And Wellness Using The Triad Of Health
                </li>
                <li class="list-group-item">
                    Chapter 3: The Physical Body
                </li>
                <li class="list-group-item">
                    Chapter 4: The Emotional Body
                </li>
                <li class="list-group-item">
                    Chapter 5: The Chemical Body
                </li>
                <li class="list-group-item">
                    Chapter 6: Exercise, Yoga, Meditation and Prayer
                </li>
                <li class="list-group-item">
                    Chapter 7: Putting It All Together
                </li>
                <li class="list-group-item">
                    Chapter 8: The Global Health Model
                </li>
                <li class="list-group-item">
                    References, Bibliography and Recommended Reading
                </li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>