<?php


namespace App;


class Category_for_sidebar
{
public function get_category(){
    foreach (Category::all() as $category){
        echo '<a href="' . route('post_by_category', $category->key) . '">' .  $category->category . '</a><br>';
    }
}
}
