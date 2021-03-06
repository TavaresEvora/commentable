## Commentable ##
 
### Installation ###
 
Add commentable to your composer.json file to require :
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
 
Migrate comments table
```
  php artisan vendor:publish --tag=comment-migrations
  php artisan migrate
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
    $post->addComment('Superbe article !', $user);
    
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

get author of comment
``` php
    <?php
    
    @foreach($post->comments as $comment)
        <p>
            {{ $comment->body }} - <span>{{ $comment->author->name }}</span>
        </p>
    @endforeach
```