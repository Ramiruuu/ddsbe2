<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table = 'tbluserjob2';
    protected $primaryKey = 'jobid';
    
    protected $fillable = [
        'jobid', 'jobname',
    ];
    
    public $timestamps = false;
}