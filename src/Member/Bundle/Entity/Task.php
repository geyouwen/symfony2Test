<?php
/**
 * Created by PhpStorm.
 * User: geyouwen
 * Date: 4/26/16
 * Time: 11:02 AM
 */

namespace Member\Bundle\Entity;


class Task
{
    protected $task, $username, $password, $mobile, $qq, $email;

    protected $dueDate;

    public function getTask()
    {
        return $this->task;
    }
    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getMobile()
    {
        return $this->mobile;
    }
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getQq()
    {
        return $this->qq;
    }
    public function setQq($qq)
    {
        $this->qq = $qq;
    }

    public function getUserName()
    {
        return $this->username;
    }
    public function setUserName($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}