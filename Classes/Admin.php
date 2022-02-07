
<?php
include_once "Service.php";
class Admin
{
    use Service;
    private $id;
    private $name;
    private $password;

    public function __construct($name= "", $password="")
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function login()
    {
        $accounts = $this->loadData($this->ADMIN);
        foreach ($accounts as $account){
            if($this->name==$account["name"]&& $this->password ==$account["password"]){
                $_SESSION["user"]=$account;
                return true;
            }

        }
        return false;
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:login.php");
    }


}