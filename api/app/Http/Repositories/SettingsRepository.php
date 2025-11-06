<?php


namespace App\Http\Repositories;

use Marvel\Database\Models\Settings;

class SettingsRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Settings::class;
    }
}
