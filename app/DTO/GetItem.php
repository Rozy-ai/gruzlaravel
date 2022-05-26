<?php

namespace App\DTO;

class GetItem 
{
            public static function getData($request , $item)
    {
        $data = [
  'category_id' => $item['category_id'],
  'date_created' => $item['date_created'],
  'status' => $item['status'],
  'is_menu' => $item['is_menu'],
  'is_main' => $item['is_main'],
  'type' => 2,
  'tk' => [
    'title' => $request['title_tk'],
    'description' => $request['description_tk'],
    'content' => $request['content_tk'],
],
  'ru' => [
    'title' => $request['title_ru'],
    'description' => $request['description_ru'],
    'content' => $request['content_ru'],
],
  'en' => [
    'title' => $request['title_en'],
    'description' => $request['description_en'],
    'content' => $request['content_en'],
],
];
if ($request['title_ru'] == null &&  $request['description_ru'] == null) {
   unset($data['ru']);
}
if ($request['title_en'] == null &&  $request['description_en'] == null) {
   unset($data['en']);
}
if ($request['title_tk'] == null &&  $request['description_tk'] == null) {
   unset($data['tk']);
}
        return $data;
    }
}