<?php

class Movie extends Controller {
    public function index(){
      $this->view('movie/index');


        
        }   

    public function search(){
      if (!isset($_REQUEST['movie'])){
        
        // redirect to movie
        
      }

      $api = this->model('Api');

      $movie_title = $_REQUEST['movie'];
      $movie = $api->search($movie_title);

      echo "<pre>";
      print_r($movie);
      die;


      this->view('movie/results',['movie' => $movie]);

      COSC Project
        movie[search....]
      [SEARCH BUTTON]

     Barbie Rating 1(a href = "/movie/review/1")") 2 3 4 5   
    }

  public function review($rating = ''){

  // if rating isn 1,2,3,4,5 etc
    
  
}