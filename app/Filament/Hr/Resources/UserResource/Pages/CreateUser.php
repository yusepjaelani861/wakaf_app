<?php

namespace App\Filament\Hr\Resources\UserResource\Pages;

use App\Filament\Hr\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
