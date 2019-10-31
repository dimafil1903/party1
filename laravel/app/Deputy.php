<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Deputy extends Model
{
    use Searchable;
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('id' => $array['id'], 'name' => $array['name'], 'bio' => $array['bio']);
    }
}
