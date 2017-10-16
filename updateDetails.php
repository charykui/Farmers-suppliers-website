<?php

 public function update($firstname,$lastname,$username,$email,$telNo) {
 $profile= array( ':firstname' =>$firstname,
 ':lastname' =>$lastname,
 ':username' =>$username,
 ':email' => $email,
 ':telNo' => $telNo,
 

 $sql = 'UPDATE tasks
 SET firstname = :firstname,
     lastname = :lastname,
     username = :username,
     email = :email,
     telNo =:telNo,
     position=:position,

 WHERE user_id= :user_id';
 
 $q = $this->conn->prepare($sql);
 
 return $q->execute($task);
 }
 
 /**
 * close the database connection
 */
 public function __destruct() {
 // close the database connection
 $this->conn = null;
 }
}