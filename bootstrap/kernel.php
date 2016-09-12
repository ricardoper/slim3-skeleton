<?php

use Dotenv\Dotenv;

// Load Dotenv //
if (file_exists(base_path() . '/.env')) {
    $_dotenv = new Dotenv(base_path());

    $_dotenv->load();

    unset($_dotenv);
}
