<?php
/**
 * Created by PhpStorm.
 * User: Ditte
 * Date: 06-11-2017
 * Time: 13:51
 */
$ListMovies = array();

function AddMovie($newMovie){
    array_push($ListMovies,$newMovie);
}

function Display($list){

    echo 'I display<br>';
    foreach($list as $item){
        echo $item->name;
        echo '<br>';
        echo $item->genre;
        echo '<br>';
        echo $item->playtime;
        echo '<br>';
    }
}