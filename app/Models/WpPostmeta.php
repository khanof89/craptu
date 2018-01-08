<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class WpPostmeta extends Model
    {
        public $timestamps = false;
        protected $primaryKey = 'ID';
        protected $table = 'wp_postmeta';
    }
