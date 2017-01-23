<?php

// controllers/home.ctrl.php

include '../functions/html.lib.php';

function home_controller() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        post_contact_us($_POST);
    }

    $menu_lang = include '../lang/lv/menu.lang.php';
    $menu_cfg = include '../config/menu.config.php';
    $title = 'Hello, World';

    include '../views/layouts/_html.view.php';
}

function post_contact_us(array $contact_message) {
    global $APP;

    $email = $contact_message['email'] ?? '' ;
    $email = $email;

    $name = $contact_message['name'];

    $message = $contact_message['message'];

    // if ($email === '') {
    //     $APP['FORM_ERROR'] = 'Email is required';
    // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $APP['FORM_ERROR'] = 'Please fill the correct email address.';
    // } else {
        
    // }

    include '../models/ContactMessage.php';

    $cm = new ContactMessage;

    $cm->name = $name;
    $cm->email = $email;
    $cm->message = $message;

    $cm->save();
}

