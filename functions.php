<?php

function login($credentials, $users) {
    foreach($users as $user) {
        if( $user['email'] === $credentials['email'] && $user['password'] === $credentials['password'] ) {
            return $user;
        }
        return false;
    }
}