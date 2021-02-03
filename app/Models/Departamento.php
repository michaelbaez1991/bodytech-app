<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'departamentos';

    /**
    * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio');
    }    
}
