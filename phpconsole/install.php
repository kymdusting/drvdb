<?php

include_once('phpconsole.php');

$phpconsole = new Phpconsole();
$phpconsole->set_backtrace_depth(1);

/*
==============================================
USER'S SETTINGS
==============================================
*/

$phpconsole->set_domain('.drvdb:8881');  // don't forget to use leading dot, like so: .your-domain.com
$phpconsole->add_user('kymdusting', '2ZeURNOzQUh9lXt8mu8GdS2tXZtV22X30U9xHAqdRVhsaB14oTwr5M2WnDvc3vLG', 'KcejFFpopLqqZy4ZgwnctMCkftdqIRL4B2ktyWuVsuxZvKoY4rPJKgdWo8izGnjf'); // you can add more developers, just execute another add_user()




function phpconsole($data_sent, $user = false) {
    global $phpconsole;
    return $phpconsole->send($data_sent, $user);
}

function phpcounter($number = 1, $user = false) {
    global $phpconsole;
    $phpconsole->count($number, $user);
}

function phpconsole_cookie($name) {
    global $phpconsole;
    $phpconsole->set_user_cookie($name);
}

function phpconsole_destroy_cookie($name) {
    global $phpconsole;
    $phpconsole->destroy_user_cookie($name);
}
