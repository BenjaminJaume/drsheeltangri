<?php

/*
Template Name: Book
*/

get_header(); ?>

<?php echo do_shortcode('[top_banner url="' . get_the_post_thumbnail_url() . '" title="' . get_the_title() . '"]'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <p>
                Download a free copy of Dr. Tangri’s book
            </p>
            <h1 class="display-4 text-brand text-uppercase font-kollektif font-weight-light mb-1">
                Let It Flow
            </h1>
            <!-- <h3 class="font-weight-light font-italic"> -->
            <h4 class="text-light-grey font-italic font-merriweather mb-3">
                Hands on techniques for healing body, mind, and spirit
            </h4>
        </div>
    </div>
    <hr class="my-5 w-75 bg-dark" />
    <div class="row mb-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h4 class="font-kollektif text-brand font-weight-light text-muted">
                Get the free ebook in one of the languages offered, or order an English hard copy sent to you.
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 text-center mx-auto mb-5 mb-md-0">
            <h1 class="font-kollektif mb-3">
                <span class="align-text-bottom">
                    <?php echo do_shortcode('[svg-flag flag="US" inline="true" size="1"]'); ?>
                </span>
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
        <div class="col-12 col-md-4 text-center mx-auto mb-5 mb-md-0">
            <h1 class="font-kollektif mb-3">
                <span class="align-text-bottom">
                    <?php echo do_shortcode('[svg-flag flag="ES" inline="true" size="1"]'); ?>
                </span>
                Spanish
            </h1>
            <a href="<?php echo wp_get_attachment_url(2070); ?>" class="btn btn-success btn-lg rounded-0 mb-2" download>
                Download
                <i class="fa fa-download"></i>
            </a>
            <p class="text-muted">
                <?php
                $file_type = wp_check_filetype(wp_get_attachment_url(2070));
                $file_size = formatBytes(filesize(get_attached_file(2070)), 2);

                echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
            </p>
        </div>
        <div class="col-12 col-md-4 text-center mx-auto mb-5 mb-md-0">
            <h1 class="font-kollektif mb-3">
                <span class="align-text-bottom">
                    <?php echo do_shortcode('[svg-flag flag="DE" inline="true" size="1"]'); ?>
                </span>
                German
            </h1>
            <a href="<?php echo wp_get_attachment_url(1912); ?>" class="btn btn-success btn-lg rounded-0 mb-2" download>
                Download
                <i class="fa fa-download"></i>
            </a>
            <p class="text-muted">
                <?php
                $file_type = wp_check_filetype(wp_get_attachment_url(1912));
                $file_size = formatBytes(filesize(get_attached_file(1912)), 2);

                echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
            </p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 border text-center py-5">
            <p class="font-weight-bold font-big m-0">If you would like to buy a hard copy of "Let It Flow"</p>
            <p class="text-muted">
                <br />
                <br />

                ISBN: ISBN 1-55212-437-1
                <br />

                List Price:
                <strong>
                    <span class="flag-icon flag-icon-us align-baseline ml-2"></span> USD&#36;14.50
                    <span class="flag-icon flag-icon-ca align-baseline ml-2"></span> CAD&#36;16.00
                    <span class="flag-icon flag-icon-eu align-baseline ml-2"></span> &#128;12.00
                    <span class="flag-icon flag-icon-gb align-baseline ml-2"></span> &#163;8.50
                </strong>
                <br />

                100 pages; quality trade paperback (softcover); catalogue #00-0102
                <br />
                <br />


                <a href="https://www.trafford.com/Bookstore/BookDetail.aspx?BookId=SKU-000155863" alt="" target="_blank" class="btn btn-success rounded-0">
                    Buy the hard copy now
                </a>

                <br />
                <br />

                or Phone <a href="tel:1-888-232-4444" class="text-success">1-888-232-4444</a> (USA and Canada only) or <a href="tel:1-250-383-6864" class="text-success">1-250-383-6864</a>.
                <br />

                From Europe, ring our UK order desk clerk at local rate number
                <br />
                <a href="tel:08452309601" class="text-success">0845 230 9601</a> (UK only) or <a href="tel:+441865722113" class="text-success">+44 (0)1865 722 113</a>

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