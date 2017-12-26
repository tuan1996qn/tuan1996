<?php
// Silence is golden.
function jam_add_more_buttons($buttons) {
    $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';
    return $buttons;
}
add_filter("mce_buttons_3", "jam_add_more_buttons");
