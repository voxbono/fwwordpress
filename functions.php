<?php

function add_fotoweb_button() {
    echo '<a href="' . get_option('fw_url') . '/fotoweb/views/selection?TB_iframe=true&width=600&height=550" class="button thickbox">FotoWeb</a>';
}