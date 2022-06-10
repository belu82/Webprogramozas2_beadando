<?php

    class crud{
        private $db;

        //https://www.php.net/manual/en/language.oop5.decon.php
        function __construct($db_helper){
            $this->db = $db_helper;
        }

        public function insert($vezeteknev, $keresztnev, $szulido, $email, $telszam, $speciality){
            try{
                //https://www.php.net/manual/en/pdostatement.bindparam.php
                $sql = "INSERT INTO attendee (vezeteknev, keresztnev, szulev, telszam, email, specialities) VALUES (:vezeteknev, :keresztnev, :szulev, :telszam, :email, :speciality)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':vezeteknev', $vezeteknev);
                $stmt->bindparam(':keresztnev', $keresztnev);
                $stmt->bindparam(':szulev', $szulido);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':telszam', $telszam);
                $stmt->bindparam(':speciality', $speciality);
                //múvelet végrehajtása
                $stmt->execute();
                return true;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }


        public function getAttendees(){
            try{
                $sql = "Select * from attendee";
                $result = $this-> db -> query($sql);
                return $result;

            }catch (PDOException $e){
                echo $e->getMessage();
                return  false;
            }
        }

        public function getSpecialities(){
            try{
                $sql = "SELECT * FROM `specialities`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function getAttendeeViews($id){
            try{

                $sql = "select * from attendee where id = :id";
                $statement = $this->db->prepare($sql);
                $statement->bindparam(':id',$id);
                $statement->execute();
                $result = $statement->fetch();
                return $result;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function editAttendee($id, $vezeteknev, $keresztnev, $szulev, $email, $telszam, $specialities){
            try{
                $sql = "UPDATE `attendee` SET `vezeteknev`=:vezeteknev,`keresztnev`=:keresztnev,`szulev`=:szulev,`email`=:email,`telszam`=:telszam,`specialities`=:specialities WHERE id = :id ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':vezeteknev', $vezeteknev);
                $stmt->bindparam(':keresztnev', $keresztnev);
                $stmt->bindparam(':szulev', $szulev);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':telszam', $telszam);
                $stmt->bindparam(':specialities', $specialities);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function deleteAttendee($id){
            try{
                $sql = "delete from attendee where id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }


    }


?>