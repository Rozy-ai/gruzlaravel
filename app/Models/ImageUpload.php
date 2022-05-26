<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $table = 'tbl_document';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['filename'];
    // protected $hidden = [];
    // protected $dates = [];


    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'tbl_item_to_document',
            'document_id',
            'item_id'
        );
    }

        public function images()
    {
        return $this->belongsToMany(
            Item::class,
            'tbl_image_to_document',
            'document_id',
            'image_id'
        );
    }
}
