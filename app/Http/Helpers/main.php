<?php

use Spatie\Valuestore\Valuestore;

function settings($key)
{
    $settings = Valuestore::make(storage_path('settings.json'));

    return $settings->get($key);
}
