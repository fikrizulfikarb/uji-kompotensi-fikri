<?php 

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Comment;

class ClientController extends Controller {
 
  function about(){
    return view('template.client.about'); 
   }

  function home(){
    return view('template.client.home'); 
  }
  
  function index(){
    $data['list_article'] = Article::all();
    
    return view('template.blog.index', $data);
  }

  function show(Article $article){
    $data['article'] = $article;
    $data2['list_coment'] = Comment::all();
    return view('template.blog.show', $data , $data2);
  }


}