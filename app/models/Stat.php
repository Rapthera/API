<?php

class Stat extends \Eloquent {
    protected $fillable = [];

    protected $table = 'stats';

    protected $hidden = ['id', 'updated_at'];
}