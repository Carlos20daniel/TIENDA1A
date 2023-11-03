<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Nombre
 * @property $Costo
 * @property $Descripcion
 * @property $Existencia
 * @property $Categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Costo' => 'required',
		'Descripcion' => 'required',
		'Existencia' => 'required',
		'Categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Costo','Descripcion','Existencia','Categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'productos_id', 'id');
    }
    

}
