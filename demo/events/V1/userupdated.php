<?php namespace Demo\Events\V1;

class UserUpdated {
	
	public $attributes;

	public function __construct($attributes)
	{
		$this->attributes = $attributes;
	}

}