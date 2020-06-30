

# LUUID (Liam-senpai UUID)

A Laravel package for creating uuid primary keys.

**How to use?**
1) Install `composer require haymetg/luuid`
2) use `luuid()` in migration, 

*Example:*

    Schema::create('posts', function (Blueprint  $table) {
        $table->luuid(); // you can also custom your luuid `luuid('post_id')`
        $table->string('title');
        $table->string('body');
        $table->timestamps();
    });


3) use `WithUuid` trait in your Model and declare the primary key

*Example:*

    namespace  App;
    
    use HaymeTG\LUUID\Traits\WithUuid;
    use Illuminate\Database\Eloquent\Model;
    
    class Post extends Model
    {
    	use WithUuid;
    	protected $primaryKey = 'uuid';
    }

Done!
