<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser2';
        // column sa table
        protected $fillable = ['username', 'password','gender'];

        public $timestamps = false;
        //protected $primaryKey = 'id';

        protected $hidden = ['password',];
 }