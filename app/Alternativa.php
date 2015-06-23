<?php namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model {

	protected $table = 'alternativa';
	
	protected $fillable=[
        'texto'
    ];

	function questao() {
		return $this->belongsTo('Questions\Questao');
	}

}
