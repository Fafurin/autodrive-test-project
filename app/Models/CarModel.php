<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'generation_id',
        'mark_id'
    ];

    public function generations()
    {
        return $this->hasMany(Generation::class);
    }

    public function mark()
    {
        return $this->belongsTo(Mark::class, 'mark_id', 'id');
    }


//    public function delete()
//    {
//        $this->generation()->delete();
//        return parent::delete(); // TODO: Change the autogenerated stub
//    }
}
