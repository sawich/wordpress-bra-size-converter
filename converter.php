<?php

function render_bra_size_converter()
{
    return '
    <form id="bra-size-form">
        <label for="bra-size-input">Введите буквенный размер:</label>
        <input type="text" id="bra-size-input" name="bra_size" maxlength="1" required>
        <button type="submit">Преобразовать</button>
    </form>
    <div id="bra-size-result"></div>';
}

function bra_size_converter_scripts()
{
    wp_enqueue_script(
        'bra-size-converter',
        plugin_dir_url( __FILE__ ) . 'resources/index.js'
    );

    wp_localize_script('bra-size-converter', 'braSizePluginContext', [
        'requestUrl' => admin_url('admin-ajax.php'),
    ]);
}

function bra_size_converter_styles()
{
    wp_enqueue_style(
        'bra-size-converter-style',
        plugin_dir_url( __FILE__ ) . 'resources/index.css'
    );
}


add_action('wp_enqueue_scripts', 'bra_size_converter_scripts');
add_action('wp_enqueue_scripts', 'bra_size_converter_styles');

add_shortcode('convert_bra_size', 'render_bra_size_converter');
?>