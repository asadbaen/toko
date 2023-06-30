<?php

function logged_in()
{
    $CI = get_instance();
    $user_session = $CI->session->userdata('userid');

    if ($user_session) {
        redirect('admin');
    }
}

function logged_fail()
{
    $CI = get_instance();
    $user_session = $CI->session->userdata('userid');

    if (!$user_session) {
        redirect('auth'); // Ganti 'auth' dengan URL halaman login
    }
}
