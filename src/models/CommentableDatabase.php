<?php

namespace Tavaresevora\Commentable\Models;


use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

trait CommentableDatabase{
    
    /**
     * Get the entity's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');
    }

    /**
     * Get validated comments.
     */
    public function validatedComments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('validate', true)->orderBy('created_at', 'desc');
    }

    /**
     * Get validated comments.
     */
    public function unvalidatedComments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('validate', false)->orderBy('created_at', 'desc');
    }

    /**
     * Create a new comment
     * @param $body
     * @param Model $author
     * @param $activate |NULL
     */
    public function addComment($body, Model $author, $validate = NULL){
        return $this->comments()->save(
            new Comment([
                'body' => $body,
                'author_type' => get_class($author),
                'author_id' => $author->id,
                'validate' => $activate
            ])
        );
    }

    /**
     * valid a comment
     * @param Comment $comment
     * @return bool
     */
    public function validComment(Comment $comment){
        return $comment->validate = true;
    }

    /**
     * unvalid a comment
     * @param Comment $comment
     * @return bool
     */
    public function unvalidComment(Comment $comment){
        return $comment->validate = false;
    }

    /**
     * Update comment
     *
     * @param Comment $comment
     * @param $body
     * @param Model|NULL $author
     * @return bool
     */
    public function updateComment(Comment $comment, $body, Model $author = NULL) {
        $author = ( isset($author)) ? $author : $comment->author;
        return $comment->update([
            'body' => $body,
            'author_type' => get_class($author),
            'author_id' => $author->id
        ]);
    }

    /**
     * Delete a comment
     *
     * @param Comment $comment
     * @return bool|null
     * @throws \Exception
     */
    public function deleteComment(Comment $comment) {
        return $comment->delete();
    }
}