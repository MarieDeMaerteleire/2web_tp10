<?php

/**
 * Created by PhpStorm.
 * User: riima
 * Date: 17/03/2017
 * Time: 15:49
 */
class Post
{
    private $_id, $_title, $_body, $_publicationDate, $_user;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->_body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->_body = $body;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->_publicationDate;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->_publicationDate = $publicationDate;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->_user = $user;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function __construct($id = "21",$title = "lapin", $body = null, $publicationDate = "17 Mars 2017", $user ="Admin")
    {
        $this->_id = $id;
        $this->_title = $title;
        $this->_body = $body;
        $this->_publicationDate = $publicationDate;
        $this->_user = $user;
    }


}