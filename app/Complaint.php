<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'user_id', 'nik', 'isi_laporan', 'foto', 'status'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'user_id' => 'integer',
        'nik' => 'string',
        'isi_laporan' => 'string',
        'foto' => 'string',
        'status' => 'string'
    ];

<<<<<<< HEAD
    public function user ()
    {
=======
    public function user () {
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
        return $this->belongsto('App\User', 'user_id');
    }
}
