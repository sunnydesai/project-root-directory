<?php

$userArray = array(
    'user1',
    'user2',
    'user3',
    'user4',
);

$logger = new UserUpdateLogger();
$users = new Users($userArray); 

$users->attach($logger);

$users->updateUsers();