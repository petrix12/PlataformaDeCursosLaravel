<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Esta función es un atributo: get[Completed]Attribute
    // Comprueba si una lección esta completada
    public function getCompletedAttribute(){
        // Para traernos el registro del usuario autentificado
        return $this->users->contains(auth()->user()->id);
    }

    //Relacion uno a uno

    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    //Relacion uno a muchos inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a uno polimorfica

    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //Relacion uno a muchos polimorfica

    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions(){
    return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

}
