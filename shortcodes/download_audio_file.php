<?php

function download_audio_file($atts)
{
    ob_start();

    extract(shortcode_atts(array(
        'id' => '',
    ), $atts));
?>
    <div class="text-center">
        <a href="<?php echo wp_get_attachment_url($id); ?>" class="btn btn-success rounded-0 mt-3" download="">
            Download the audio file
        </a>
        <p class="text-muted mb-0 mt-2">
            <?php
            $file_type = wp_check_filetype(wp_get_attachment_url($id));
            $file_size = formatBytes(filesize(get_attached_file($id)), 2);

            echo '.' . $file_type['ext'] . ' | ' . $file_size; ?>
        </p>
    </div>

<?php
    return ob_get_clean();
}
// register shortcode
add_shortcode('download_audio_file', 'download_audio_file');
