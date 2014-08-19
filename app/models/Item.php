<?php

class Item extends \Eloquent {
	protected $fillable = [];

    protected $table = 'items';

    protected $hidden = ['id', 'updated_at'];
}