<?php

class UserService{
    
    public function create(User $user) {
        try {
            $query = "INSERT INTO user (                   
                  firstName,lastName,age,gender)
                  VALUES (
                  :firstName,:lastName,:age,:gender)";

            $sql = DatabaseConfig::getConnection()->prepare($query);
            $sql->bindValue(":firstName", $user->getFirstName());
            $sql->bindValue(":lastName", $user->getLastName());
            $sql->bindValue(":age", $user->getAge());
            $sql->bindValue(":gender", $user->getGender());
            
            return $sql->execute();
        } catch (Exception $err) {
            print "Error inserting user <br>" . $err . '<br>';
        }
    }

    public function listUsers() {
        try {
            $query = "SELECT * FROM user order by id asc";
            $sql = DatabaseConfig::getConnection()->query($query);
            $users = $sql->fetchAll(PDO::FETCH_ASSOC);
            $allUsers = array();
            foreach ($users as $user) {
                $user = new User();
                $user->setId($user['id']);
                $user->setFirstName($user['firstName']);
                $user->setLastName($user['lastName']);
                $user->setAge($user['age']);
                $user->setGender($user['gender']);

                $allUsers[] = $user;
            }
            return $allUsers;
        } catch (Exception $err) {
            print "Error getting all users" . $err;
        }
    }
     
    public function update(User $user) {
        try {
            $query = "UPDATE user set
                  firstName=:firstName,
                  lastName=:lastName,
                  age=:age,
                  gender=:gender                                                                 
                  WHERE id = :id";

            $sql = DatabaseConfig::getConnection()->prepare($query);
            $sql->bindValue(":firstName", $user->getFirstName());
            $sql->bindValue(":lastName", $user->getLastName());
            $sql->bindValue(":age", $user->getAge());
            $sql->bindValue(":gender", $user->getGender());
            $sql->bindValue(":id", $user->getId());
            return $sql->execute();
        } catch (Exception $err) {
            print "Error updating user<br> $err <br>";
        }
    }

    public function delete(User $user) {
        try {
            $query = "DELETE FROM user WHERE id = :id";
            $sql = DatabaseConfig::getConnection()->prepare($query);
            $sql->bindValue(":id", $user->getId());
            return $sql->execute();
        } catch (Exception $err) {
            print "Error deleting user<br> $err <br>";
        }
    }
 }

 ?>