<?php

namespace Tavaresevora\Commentable\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Object_;

class CommentController extends Controller
{
    public function postComment(Model $commentable){
        dd($commentable);
    }
}
