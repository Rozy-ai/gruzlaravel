<?php

namespace App\DTO;

class GetData 
{
            public static function getData($request, $category)
    {
        $data = [
  'code' => $request['code'],
  'top' => $category['top'],
  'status' => $category['status'],
  'url_prefix' => $request['url_prefix'],
  'tk' => [
    'name' => $request['name_tk'],
    'description' => $request['description_tk'],
    'alias' => $request['alias_tk'],
    'meta_description' => $request['meta_description_tk'],
    'meta_keyword' => $request['meta_keyword_tk'],
],
  'ru' => [
    'name' => $request['name_ru'],
    'description' => $request['description_ru'],
    'alias' => $request['alias_ru'],
    'meta_description' => $request['meta_description_ru'],
    'meta_keyword' => $request['meta_keyword_ru'],
],
  'en' => [
    'name' => $request['name_en'],
    'description' => $request['description_en'],
    'alias' => $request['alias_en'],
    'meta_description' => $request['meta_description_en'],
    'meta_keyword' => $request['meta_keyword_en'],
],
];
if ($request['name_ru'] == null &&  $request['description_ru'] == null) {
   unset($data['ru']);
}
if ($request['name_en'] == null &&  $request['description_en'] == null) {
   unset($data['en']);
}
if ($request['name_tk'] == null &&  $request['description_tk'] == null) {
   unset($data['tk']);
}
        return $data;
    }
}