<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'municipios';

    /**
    * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento');
    }    
}
