DROP TABLE IF EXISTS w5_family_members;
DROP TABLE IF EXISTS w5_relationships;
CREATE TABLE w5_relationships
( id          SERIAL       NOT NULL PRIMARY KEY
, description VARCHAR(100) NOT NULL);
CREATE TABLE w5_family_members
( id              SERIAL        NOT NULL PRIMARY KEY
, first_name      VARCHAR(100)  NOT NULL
, last_name       VARCHAR(100)  NOT NULL
, relationship_id INT           NOT NULL REFERENCES w5_relationships(id));
INSERT INTO w5_relationships (description) VALUES ('Mother');
INSERT INTO w5_relationships (description) VALUES ('Father');
INSERT INTO w5_relationships (description) VALUES ('Wife');
INSERT INTO w5_relationships (description) VALUES ('Husband');
INSERT INTO w5_relationships (description) VALUES ('Son');
INSERT INTO w5_relationships (description) VALUES ('Daughter');
INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                       VALUES ( 'Sarah'
                              , 'Birch'
                              , 3);
INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                       VALUES ( 'Teresa'
                              , 'Birch'
                              , 1);
INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                       VALUES ( 'Hannah'
                              , 'Birch'
                              , 6);
Collapse




Brother Birch  3:37 PM
Untitled 
<?php

function get_db() {

   $db = NULL;

   try
   {
     $dbUrl = getenv('DATABASE_URL');
   
     $dbOpts = parse_url($dbUrl);
   
     $dbHost = $dbOpts["host"];
     $dbPort = $dbOpts["port"];
     $dbUser = $dbOpts["user"];
     $dbPassword = $dbOpts["pass"];
     $dbName = ltrim($dbOpts["path"],'/');
   
     $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
   
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch (PDOException $ex)
   {
     echo 'Error!: ' . $ex->getMessage();
     die();
   }
   return $db;
}

?>