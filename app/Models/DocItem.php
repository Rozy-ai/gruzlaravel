<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocItem extends Model
{   
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    public $table = 'tbl_item_to_document';
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $fillable = [
        'item_id','document_id'
    ];
}