<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{

    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_modified';
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_owner_contact';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['id','my_title','my_description','my_email','my_phone','my_address'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function phoneNumber($input) {
        $numbers = $input.' ';
        $len =strlen($numbers);
        $l = 0;
        $k = 0;
        $j = 0;
        for ($i=0; $i < $len ; $i++) {
            if ($k==2 ) {
                $j=0;
                $k=0;
                $phone_numbers[]= mb_strcut($numbers,$l,$i-$l);
                $l=$i;
            }
            if ($j==2) {
                $k++;
            }
            if ($numbers[$i] == '-') {
                $j++;
            }
        }
        if (!isset($phone_numbers)){
        $input = explode(';', $input);
            return $input;
        } else
        return $phone_numbers;
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
