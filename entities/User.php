<?php

/**
 * Created by PhpStorm.
 * User: riima
 * Date: 17/03/2017
 * Time: 15:57
 */
class User
{
    private $_id, $_firstName, $_lastName, $_email, $_password;

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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * User constructor.
     * @param $_id
     * @param $_firstName
     * @param $_lastName
     * @param $_email
     * @param $_password
     */
    public function __construct($_id, $_firstName, $_lastName, $_email, $_password)
    {
        $this->_id = $_id;
        $this->_firstName = $_firstName;
        $this->_lastName = $_lastName;
        $this->_email = $_email;
        $this->_password = $_password;
    }

}