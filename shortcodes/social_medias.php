<?php

function social_medias()
{
    ob_start();

    $email = get_field('email', $contact_page_id);
    $facebook = get_field('facebook', $contact_page_id);
    $youtube = get_field('youtube', $contact_page_id);
    $instagram = get_field('instagram', $contact_page_id);
    $linkedin = get_field('linkedin', $contact_page_id);

?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="mailto:<?php echo $email['link']; ?>" alt="<?php echo $email['label']; ?>" class="btn text-success" target="_blank">
                    <!-- <img src="<?php echo $email_icon_url; ?>" alt="" class="img-fluid no-frame"> -->
                    <?php echo $email['icon']; ?>
                </a>
                <a href="<?php echo $facebook['link']; ?>" alt="<?php echo $facebook['label']; ?>" class="btn text-success" target="_blank">
                    <!-- <img src="<?php echo $facebook_icon_url; ?>" alt="" class="img-fluid no-frame"> -->
                    <?php echo $facebook['icon']; ?>
                </a>
                <a href="<?php echo $youtube['link']; ?>" alt="<?php echo $youtube['label']; ?>" class="btn text-success" target="_blank">
                    <!-- <img src="<?php echo $youtube_icon_url; ?>" alt="" class="img-fluid no-frame"> -->
                    <?php echo $youtube['icon']; ?>
                </a>
                <a href="<?php echo $linkedin['link']; ?>" alt="<?php echo $linkedin['label']; ?>" class="btn text-success" target="_blank">
                    <!-- <img src="<?php echo $linkedin_icon_url; ?>" alt="" class="img-fluid no-frame"> -->
                    <?php echo $linkedin['icon']; ?>
                </a>
                <a href="<?php echo $instagram['link']; ?>" alt="<?php echo $instagram['label']; ?>" class="btn text-success" target="_blank">
                    <!-- <img src="<?php echo $instagram_icon_url; ?>" alt="" class="img-fluid no-frame"> -->
                    <?php echo $instagram['icon']; ?>
                </a>
            </div>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// register shortcode
add_shortcode('social_medias', 'social_medias');  ?>