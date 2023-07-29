<?php

namespace AAbosham\FilamentMediaGallery\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AAbosham\FilamentMediaGallery\FilamentMediaGallery
 */
class FilamentMediaGallery extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AAbosham\FilamentMediaGallery\FilamentMediaGallery::class;
    }
}
