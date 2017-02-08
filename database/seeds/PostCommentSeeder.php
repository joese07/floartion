<?php

use Illuminate\Database\Seeder;
class PostCommentSeeder extends Seeder {
public function run()
{
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Praesent vel ligula scelerisque, vehicula dui eu, fermentum velit.
Phasellus ac ornare eros, quis malesuada augue. Nunc ac nibh at mauris dapibus fermentum.
In in aliquet nisi, ut scelerisque arcu. Integer tempor, nunc ac lacinia cursus.';

for( $i = 1 ; $i <= 20 ; $i++ )
{
$post = new App\Post;
$post->title = "Post no $i";
$post->read_more = substr($content, 0, 120);
$post->content = $content;
$post->save();
 
$maxComments = mt_rand(3,15);
for( $j = 1 ; $j <= $maxComments; $j++)
{
$comment = new App\Comment;
$comment->commenter = 'xyz';
$comment->comment = substr($content, 0, 120);
$comment->email = 'xyz@xmail.com';
$post->comments()->save($comment);
$post->increment('comment_count');
}
}
}
}
