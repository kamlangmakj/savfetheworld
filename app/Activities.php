<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = "activities";

    public function categoryTypesActivities() {
        return $this->belongsTo(CategoryTypesActivities::class,"category_types_activities_id");
    }
}
