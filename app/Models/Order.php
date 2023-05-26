<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    public function PunjabiItem()
    {
        return $this->belongsTo(PaijamaItem::class,'punjabi_id','id');
    }
    public function PaijamaItem()
    {
        return $this->belongsTo(PaijamaItem::class,'paijama_id','id');
    }
}
