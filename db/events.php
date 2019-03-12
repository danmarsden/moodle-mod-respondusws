<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2018 Respondus, Inc.  All Rights Reserved.
// Date: June 27, 2018.
defined("MOODLE_INTERNAL") || die();
if (!isset($CFG)) {
    global $CFG;
}
if (isset($CFG) && $CFG->version >= 2016120500) {
    $observers = array(
        array(
            'eventname' => '\core\event\course_content_deleted',
            'callback' => 'respondusws_course_content_deleted',
            'includefile' => '/mod/respondusws/lib.php'
        )
    );
} else {
    $observers = array(
    );
}
