<?php

function paypal_button()
{ ?>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="drsheel@ice.co.cr" />
        <input type="hidden" name="currency_code" value="USD" />
        <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" /> -->
        <button type="submit" class="btn btn-warning rounded-lg px-3">
            <?php echo wp_get_attachment_image(1128, [200, 30], false, 'class=img-fluid'); ?>
            <br />
            <span class="font-manrope">Donate now</span>
        </button>
        <!-- <img alt="" src="https://www.paypal.com/en_CR/i/scr/pixel.gif" width="1" height="1" /> -->
    </form>

<?php }
// register shortcode
add_shortcode('paypal_button', 'paypal_button');
