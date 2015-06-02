<?php namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model {
	
	protected $table = 'questao';
	
	//FILLABLE!!!
	
	function alternativas() {
		return $this->hasMany('Questions\Alternativa');
	}
	
}
