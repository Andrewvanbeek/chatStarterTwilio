<?php

// Generate a random username for the connecting client
function randomUsername() {
    $ADJECTIVES = array(
        'Luxe',
    );

    $FIRST_NAMES = array(
        'Concierge',
    );

    $LAST_NAMES = array(
        'Service',
    );

    // Choose random components of username and return it
    $adj = $ADJECTIVES[array_rand($ADJECTIVES)];
    $fn = $FIRST_NAMES[array_rand($FIRST_NAMES)];
    $ln = $LAST_NAMES[array_rand($LAST_NAMES)];

    return $adj . $fn . $ln;
}

function randomUsernamep() {
    $ADJECTIVES = array(
        'Luxe',
    );

    $FIRST_NAMES = array(
        'User',
    );

    $LAST_NAMES = array(
        'Service',
    );

    // Choose random components of username and return it
    $adj = $ADJECTIVES[array_rand($ADJECTIVES)];
    $fn = $FIRST_NAMES[array_rand($FIRST_NAMES)];
    $ln = $LAST_NAMES[array_rand($LAST_NAMES)];

    return $adj . $fn . $ln;
}