## Commentable ##
 
### Installation ###
 
Add commentable to your composer.json file to require Scafold :
```
    require : {
        ...
        "tavaresevora/commentable": "dev"
    }
```
 
Update Composer :
```
    composer update
```
 
The next required step is to add the service provider to config/app.php :
```
    Tavaresevora\Commentable\CommentableServiceProvider::class,
```
 