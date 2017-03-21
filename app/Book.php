<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Book extends Model {
   //
    protected $fillable=[
        'isbn',
        'title',
        'author',
        'publisher',
        'publisher2',
        'image'
    ];
}