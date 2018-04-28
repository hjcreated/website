<?php
/**
 * Created by PhpStorm.
 * User: hj
 * Date: 8/16/2017
 * Time: 2:43 AM
 * All methods used to connect to the database.
 */

require_once "DAL.php";
class BL
{
    public $dal;

    /**
     * BL constructor.
     * used to start connection with DataBase.
     */
    function __construct()
    {
        $this->dal=new DAL("localhost","root","","shb");
    }//construct


    /**
     * @param $Email
     * @param $password
     * @return Rows with seleceted values.
     */
    public function login($Email, $password)
    { $sql2 = "select * from nurse WHERE Email='".$Email ."'and Password='".$password ."'";
        return $result= $this->dal->executeSelect($sql2);
    }

    public function SignUp($Name,$Email,$Password,$Gender)
    { $sql = "INSERT INTO nurse(Name,Email,Password,Gender)".
        "VALUES ('".$Name."','".$Email."','".$Password."','".$Gender."');";
        return $this->dal->executeSelect($sql);
    }

}//end class