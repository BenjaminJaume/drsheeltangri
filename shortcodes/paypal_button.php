<?php

function paypal_button()
{
    ob_start();
?>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="UNA8US269JP5W">
        <input type="hidden" name="lc" value="US">
        <input type="hidden" name="item_name" value="Consultation - Dr. Sheel Tangri">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="tax_rate" value="0.000">
        <input type="hidden" name="shipping" value="0.00">
        <!-- <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest"> -->
        <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
        <!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->

        <button type="submit" name="submit" class="btn btn-warning rounded-lg px-3">
            <span class="font-kollektif">Make a payment with</span>
            <br />
            <?php echo wp_get_attachment_image(1128, [200, 30], false, 'class=img-fluid no-frame'); ?>
        </button>

    </form>


<?php
    return ob_get_clean();
}
// register shortcode
add_shortcode('paypal_button', 'paypal_button');
