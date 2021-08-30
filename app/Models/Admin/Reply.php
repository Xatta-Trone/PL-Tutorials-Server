<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function repliedby()
    {
        return $this->belongsTo(Admin::class, 'replied_by');
    }
}
