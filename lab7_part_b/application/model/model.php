<?php

class Model{

    public $dbhandle;

    public function __construct(){
        $dsn = 'sqlite:./db/test1.db';

        try{
            $this->dbhandle = new PDO($dsn,
                             'user',
                             'password',
                                      array(
                                          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                          PDO::ATTR_EMULATE_PREPARES => false,
                                      ));
        }
        catch (PDOException $e){
            echo "Cannot connect to db.";
            print new Exeption($e->getMessage());
        }
    }

    function dbCreateTable(){
        try{
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, 
                                   x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table was successfully created";
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbInsertData(){
        try{
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                 VALUES (1, 'string1', 'string2', 'string3', 'string4', 'string5');".
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                 VALUES (2, 'string1', 'string2', 'string3', 'string4', 'string5');".
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                 VALUES (3, 'string1', 'string2', 'string3', 'string4', 'string5');");
            return "X3D model data inserted into test1.db";
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbGetData(){
        try{
            $sql = 'SELECT * FROM Model_3D';
            $stmt = $this->dbhandle->query($sql);
            $result = NULL;
            $i =-0;
            while ($data = $stmt->fetch()){
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                $i ++;
            }
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return $result;
    }
}
?>
