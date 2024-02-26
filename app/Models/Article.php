<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{


    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'category_id',
        'is_accepted',
        'user_id',
        'icon'
    ];

    public function toSearchableArray()
    {
       return  [
        'id' => $this->id,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'image' => $this->image,
        'category' => $this->category,
        'title' => $this->title,
        'user_id' => $this->user_id,




       ];
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
