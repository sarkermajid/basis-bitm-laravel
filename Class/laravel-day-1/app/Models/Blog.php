<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blogs;
    public static  function getAllBlog()
    {
        return [
            0 => [
                'id'=>1,
                'title'=>'This is Blog title one',
                'short_description'=>'short description 2',
                'img'=>'1.jpg',
            ],
            1 => [
                'id'=>2,
                'title'=>'this is blog title two',
                'short_description'=>'short description 2',
                'img'=>'2.jpg',
            ],
            2 => [
                'id'=>3,
                'title'=>'this is blog three',
                'short_description'=>'short description 3',
                'img'=>'3.jpg',
            ],
            3 => [
                'id'=>4,
                'title'=>'this is blog four',
                'short_description'=>'short description 4',
                'img'=>'4.jpg',
            ],
        ];
    }

    public static function getBlogById($id)
    {
        self::$blogs = self::getAllBlog();
        foreach (self::$blogs as $blog)
        {
            if($blog['id'] == $id)
            {
                return $blog;
            }
        }
    }
}
