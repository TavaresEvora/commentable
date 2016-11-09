## Commentable ##
 
### Installation ###
 
Add commentable to your composer.json file to require Scafold :
```
    require : {
        ...
        "tavaresevora/commentable": "dev-master"
    }
```
 
Update Composer :
```
    composer update
```
 
The next required step is to add the service provider to config/app.php :
``` php
    Tavaresevora\Commentable\CommentableServiceProvider::class,
```
 
### Usage ###

Add commentable in model
``` php
    <?php
    
    namespace App;
   
    use Illuminate\Database\Eloquent\Model;
    use Tavaresevora\Commentable\Commentable;
    
    class Post extends Model
    {
        use Commentable;
        ...
    }
```

Add new comment
``` php
    <?php
    
    $post = App\Post::first();
    $user = Auth::user();
    $video->addComment('Superbe article !', $user);
    
    //addComment($body, Model $author, $validate = NULL);
```

update a comment
``` php
    <?php
    
    $post = App\Post::first();
    $comment = $post->comments->first();
    $user = Auth::user();
    $post->updateComment($comment, $body)
    
    // If you want change the author
    $newUser = User::find(2);
    $post->updateComment($comment, $body, $newUser)
    
    //updateComment(Comment $comment, $body, Model $author = NULL)
```

delete a comment
``` php
    <?php
    
    $post = App\Post::first();
    $comment = $post->comments->first();
    $post->deleteComment($comment)
    
    //deleteComment(Comment $comment)
```