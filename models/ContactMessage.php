<?php

// models/ContactMessage.php

class ContactMessage {
    
    public $name = '';
    public $email = '';
    public $message = '';

    // Method NOT a function!
    function save() {
        $row = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];
        $row = json_encode($row);
        $row .= "\n";
        file_put_contents('../database/contact_messages.txt', $row, FILE_APPEND);
    }

    // factory pattern
    static function create($row) {
        $cm = new self;
        if (!is_array($row)) {
            // is json string
            $row = json_decode($row, true);
        }
        $cm->name = $row['name'];
        $cm->email = $row['email'];
        $cm->message = $row['message'];

        return $cm;
    }

    static function getById($row_nr) {
        $content = file_get_contents('../database/contact_messages.txt');
        $rows = explode("\n", $content);
        $row = $rows[$row_nr - 1];
        $cm = $this->create($row);
        return $cm;
    }

    static function getAll() {
        $content = file_get_contents('../database/contact_messages.txt');
        $rows = explode("\n", $content);
        $rows_count = count($rows) - 1;

        $collection = [];

        for($k = 0; $k < $rows_count; $k++) {
            $collection[] = self::create($rows[$k]);
        }

        return $collection;
    }

}
