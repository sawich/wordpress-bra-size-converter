<?php

function convert_bra_size_ajax_handler()
{
    if (isset($_POST['bra_size']) && is_string($_POST['bra_size'])) {
        $bra_size = strtoupper(sanitize_text_field($_POST['bra_size']));

        $bra_size_map = [
            'A' => 1,
            'B' => 2,
            'C' => 3,
            'D' => 4,
            'E' => 5
        ];

        if (array_key_exists($bra_size, $bra_size_map)) {
            echo $bra_size_map[$bra_size];
        } else {
            echo 'Недопустимый размер.';
        }
    } else {
        echo 'Недопустимый размер.';
    }

    wp_die();
}

add_action('wp_ajax_convert_bra_size', 'convert_bra_size_ajax_handler');
add_action('wp_ajax_nopriv_convert_bra_size', 'convert_bra_size_ajax_handler');

?>