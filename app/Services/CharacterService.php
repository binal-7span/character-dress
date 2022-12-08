<?php

namespace App\Services;

use App\Models\Character;
use Carbon\Carbon;

class CharacterService
{
    public function attachDresses(Character $character,array $inputs)
    {
        $character->dresses()->sync($inputs['dress_id']);
    }

    public function detachDresses(Character $character,array $inputs)
    {
        $character->dresses()->detach($inputs['dress_id']);
    }
}
