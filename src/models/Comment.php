<?php

namespace Tavaresevora\Commentable\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Get the commentable entity that the comment belongs to.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get author
     * @return mixed
     */
    public function author()
    {
        return $this->morphTo();
    }
    
}
