<?php namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model {

	protected $table = 'alternativa';
	
	protected $fillable=[
        'texto',
		'questao_id'
    ];

	function questao() {
		return $this->belongsTo('Questions\Questao');
	}

}
