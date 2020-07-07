<?php

function paypal_button()
{
    ob_start();
?>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="drsheel@ice.co.cr" />
        <input type="hidden" name="currency_code" value="USD" />
        <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" /> -->
        <button type="submit" class="btn btn-warning rounded-lg px-3">
            <span class="font-kollektif">Pay with</span>
            <br />
            <?php echo wp_get_attachment_image(1128, [200, 30], false, 'class=img-fluid no-frame'); ?>
        </button>
        <!-- <img alt="" src="https://www.paypal.com/en_CR/i/scr/pixel.gif" width="1" height="1" /> -->
    </form>

<?php
    return ob_get_clean();
}
// register shortcode
add_shortcode('paypal_button', 'paypal_button');
