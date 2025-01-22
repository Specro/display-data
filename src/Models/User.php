<?php
namespace DataDisplay\Models;

/**
 * Model to store user data.
 */
class User
{
    /**
     * First name.
     * @var string
     */
    protected $first_name;

    /**
     * Age.
     * @var int
     */
    protected $age;

    /**
     * Gender
     * @var string
     */
    protected $gender;

    public function __construct($user)
    {
        $this->first_name = $user['first_name'];
        $this->age = $user['age'];
        $this->gender = $user['gender'];
    }

    /**
     * Set first name.
     * @param mixed $first_name
     * @return void
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * Get first name.
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set age.
     * @param mixed $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Get age.
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender.
     * @param mixed $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender.
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
}