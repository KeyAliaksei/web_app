<?php

class RegistrationModel extends Model {

        public function registerNewUser($regName, $regSurname, $regEmail, $regLogin, $regPassword)
        {
            if(!empty($regName) && !empty($regSurname) && !empty($regEmail) && !empty($regLogin) && !empty($regPassword)){
                $sql = "INSERT INTO user(name, surname, email, login, password)
                VALUES (:name, :surname, :email, :login, :password)";

                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(":name", $regName, PDO::PARAM_STR);
                $stmt->bindValue(":surname", $regSurname, PDO::PARAM_STR);
                $stmt->bindValue(":email", $regEmail, PDO::PARAM_STR);
                $stmt->bindValue(":login", $regLogin, PDO::PARAM_STR);
                $stmt->bindValue(":password", $regPassword, PDO::PARAM_STR);
                if($stmt->execute()) {
                    $_SESSION['user'] = $_POST['login'];
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
}