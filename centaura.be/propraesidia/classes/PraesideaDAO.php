<?php

class PreasideaDAO
{

    private $dbh;

        function __construct(){
            $this->dbh = DatabasePDO::getInstance();
        }

    public function getPreas(){
        try{

                    $sql = "SELECT * FROM praesidium ";

                    $stmt = $this->dbh->prepare($sql);

                    $stmt->execute();

                    $result = $stmt->FetchAll();

                return $result;

                }catch(PDOException $e){
                    echo $e->getMessage();
                }
    }


    public function getYears(){

        try{

            $sql = "SELECT academiestartjaar FROM praesidium GROUP BY academiestartjaar";

            $stmt = $this->dbh->prepare($sql);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_COLUMN,0);

            $result = $stmt->fetchAll();

            return $result;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getPerYear($year){


        try{

            $sql = "SELECT * FROM praesidium WHERE academiestartjaar = :year ORDER BY id";

            $stmt = $this->dbh->prepare($sql);

            $stmt->bindValue("year",$year);

            $stmt->execute();

            $result = $stmt->FetchAll();

            return $result;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
