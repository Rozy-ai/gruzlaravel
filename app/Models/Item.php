<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Helper\Imageable;
use Illuminate\Support\Facades\App;

class Item extends Model implements TranslatableContract
{
    
    use Translatable,Imageable;

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_item';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    public $translatedAttributes = ['title', 'description','content'];
    protected $fillable = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    // public function uploadImage($image)
    // {
    //     if($image == null) { return; }

    //     Storage::delete('uploads/item/' . $this->image);
    //     $filename = str_random(10).'.'.$image->extension();
    //     $image->saveAs('uploads/item',$filename);
    //     $this->image = $filename;
    //     $this->save();
    // }


    public function getImage()
    {
        $docs = $this->docs->all();
        if($docs == null) {
            return '/uploads/item/img/no-image.png';
        }
        return '/uploads/'.$docs[0]['path'];
    }

    public function setCategory($id) {
        if($id == null) {return;}
        $this->category_id = $id;
        return $this;
    }

    public function setDocs($ids) {
        if($ids == null) {return;}
        $this->docs()->sync($ids);
        return $this;
    }


    public function setDate($date) {
        if($date == null) {return;}
        $this->date_created = $date;
        return $this;
    }


    public function setDraft() {
        $this->status = 0;
        return $this;
    }

    public function setPublic() {
        $this->status = 1;
        return $this;
    }

    public function toggleStatus($value)
    {
        if($value == null) {
            return $this->setDraft();
        }
        return $this->setPublic();
    }

        public function toggleMain($value)
    {
        if($value == null) {
            $this->is_main = 0;
            return $this;
        }
        $this->is_main = 1;
        return $this;
    }

        public function toggleMenu($value)
    {
        if($value == null) {
            $this->is_menu = 0;
            return $this;
        }
        $this->is_menu = 1;
        return $this;
    }
    public function getCategoryName()
    {
        return ($this->category != null) 
            ?  $this->category->name
            : 'No category';
    }

        public function renderDateToWord($date, $moth_format = 'm', $year_format = 'Y', $show_day = true)
    {
        $months = array(
            "tk" => array("", 'Ýanwar', 'Fewral', 'Mart', 'Aprel', 'Maý', 'Iýun', 'Iýul', 'Awgust', 'Sentýabr', 'Oktýabr', 'Noýabr', 'Dekabr'),
            "ru" => array("", 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'),
            "en" => array("", 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
        );

        if (!is_int($date)) {
            $date = strtotime($date);
        }

        $str = "";
        if ($show_day)
            $str = date('d', $date);
        if (isset($moth_format))
            $str = $str . " " . $months[App::currentLocale()][ltrim(date($moth_format, $date), "0")];
        if (isset($year_format))
            $str = $str . " " . date($year_format, $date);

        return $str;
    }
    //     public function remove()
    // {
    //     if ($this->image != null) {
    //     Storage::delete('/uploads/item/'.$this->image);
    //     }
    //     $this->delete();
    // }
        public function truncate($input, $maxWords, $maxChars, $maxSentence = null)
    {
//            $words = preg_split('/\s+/', $input);
        $words = explode(' ', $input);
        $words = array_slice($words, 0, $maxWords);
        $words = array_reverse($words);

        $chars = 0;
        $truncated = array();

        while (count($words) > 0) {
            $fragment = trim(array_pop($words));
            $chars += strlen($fragment);

            if ($chars > $maxChars) break;

            $truncated[] = $fragment;
        }
        $result = implode(" ",$truncated);

        return $result . ($input == $result ? '' : '...');
//            return $input;
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function langs()
    {
        return $this->hasMany(ItemLangs::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function docs()
    {
        return $this->belongsToMany(
            ImageUpload::class,
            'tbl_item_to_document',
            'item_id',
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
