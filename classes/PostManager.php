<?php

/**
 * Created by PhpStorm.
 * User: riima
 * Date: 22/03/2017
 * Time: 10:54
 */

interface PostManager{
    function addPost($title,$body,$user);
    function findAllPosts();
    function findPostById($id);
    function removePost($id);
}
