<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model

{
    use Searchable;
    protected $dates = [
    'created_at',
    'updated_at'
];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('id' => $array['id'],'title' => $array['title'],'body' => $array['body'],'excerpt' => $array['excerpt']);
    }

}
