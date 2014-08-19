<?php

class Hero extends \Eloquent {
	protected $fillable = [];

    protected $table = 'heroes';

    protected $hidden = ['id', 'updated_at'];
}