<?php

function admin_controller() {
    
    include '../models/ContactMessage.php';

    $messages = ContactMessage::getAll();

    include '../views/admin.view.php';

}
