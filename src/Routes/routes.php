<?php

Route::post(config('sanity.endpoints.forge.webhook', '/sanity/forge'), function () {
    \Facades\Sanity\Factory::runRunners(request()->all());
});

Route::get(config('sanity.endpoints.forge.webhook', '/sanity/forge'), function () {
    \Facades\Sanity\Factory::runRunners(request()->all());
});

Route::get(config('sanity.routes.unit', '/sanity/badges/unit.svg'), function () {
    return \Facades\Sanity\Badges::unit();
});

Route::get(config('sanity.routes.style', '/sanity/badges/style.svg'), function () {
    return \Facades\Sanity\Badges::style();
});

Route::get(config('sanity.routes.dusk', '/sanity/badges/dusk.svg'), function () {
    return \Facades\Sanity\Badges::dusk();
});
