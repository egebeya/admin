<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = ['title', 'description' , 'navlabel', 'slug', 'content', 'seotitle', 'seodescription', 'seokeyword', 'active','language'];
}