<?php


class Omdb extends Controller{

   public function index(){
     $query_url = "https://www.omdbapi.com/?
     apikey=".$_ENV[omdb_key]."&s=".$_REQUEST['title'];

     $json = file_get_contents($query_url);
     $phpObj = json_decode($json);
     $movie = (array) $phpObj;

     echo "<pre>";
     print_r($movie);
     die;
   }
}