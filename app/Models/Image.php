<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_image';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['title','description','type','size'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setDocs($ids) {
        if($ids == null) {return;}
        $this->docs()->sync($ids);
        return $this;
    }

        public function getSlider()
    {
        $docs = $this->docs->all();
        if($docs == null) {
            return '/uploads/item/img/no-image.png';
        }
        return '/uploads/'.$docs[0]['path'];
    }


    /*

    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
        public function docs()
    {
        return $this->belongsToMany(
            ImageUpload::class,
            'tbl_image_to_document',
            'image_id',
            'document_id'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
