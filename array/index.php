<?php 

class Post {
  public $title;
  public $author; 
  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post("My first post", "NN", true),
  new Post("My second post", "NN",true),
  new Post("My third post", "AR",true),
  new Post("My fourth post", "WA",false)
];

// $unpublishedPosts = array_filter($posts, function($post){
//   return !$post->published;
// });

// $publishedPosts = array_filter($posts, function($post){
//   return $post->published;
// });

// foreach ($posts as $post) {
//   $post->published = true;
// }

// $modified = array_map(function($post){
//   $post->published = true; 
//   return $post;
// }, $posts);

$posts = array_map(function($post) {
  return (array) $post;
}, $posts);

$authors = array_column($posts, 'author', 'title');


var_dump($authors);