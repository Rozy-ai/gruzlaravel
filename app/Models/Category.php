<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    
	use Translatable;

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_category';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public $translatedAttributes = ['name', 'description','alias','meta_description','meta_keyword'];
    protected $fillable = ['code','url_prefix','status'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setDraft() {
        $this->status = 0;
        return $this;
    }

    public function setPublic() {
        $this->status = 1;
        return $this;
    }
        public function toggleTop($value)
    {
        if($value == null) {
            $this->top = 0;
            return $this;
        }
        $this->top = 1;
        return $this;
    }

        public function toggleStatus($value)
    {
        if($value == null) {
            return $this->setDraft();
        }
        return $this->setPublic();
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function langs()
    {
        return $this->hasMany(CategoryLangs::class);
    }

     public function items()
    {
        return $this->hasMany(Item::class);
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
