<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model {
	//protected $table = 'users'; Necessari només si volem canviar nom de taula respecte nom de classe

	public $timestamps = false; // Si no posem això Laravel suposa que cada taula té uns camps timestamp predefinits: updated_at... i petarà quan intenti accedir

    //Afegim a mà getter per first_name. Si laravel troba el prefix get_ ja suposa que es un getter i que la resta és el nom de l'atribut (i el camp de la bd)
    // Així podem fer coses com $name = $user->first_name;
    public function get_first_name()
    {
    	return $this->get_attribute('first_name');
    }
	
}
