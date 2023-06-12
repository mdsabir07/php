<?php

// use NetworkException as GlobalNetworkException;

class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage{
    function connect()
    {
        throw new DiskFullException;
    }
    function getName()
    {
        return "MySQL";
    }
    function report($data)
    {
        
    }
}
class PostGresServer implements NetworkStorage{
    function connect()
    {
        // return $this;
        throw new ServerLoadException;
    }
    function getName()
    {
        return "PostGresSQL";
    }
    function report($data)
    {
        
    }
}
class MSSQLServer implements NetworkStorage{
    function connect()
    {
        // throw new NetworkException;
        return $this;
    }
    function getName()
    {
        return "MSSQL";
    }
    function report($data)
    {
        
    }
}

class ConnectionPull{
    private $connection;
    private $storage;
    function __construct()
    {
        $this->storage = array();
    }

    function addStorage(NetworkStorage $storage){
        array_push($this->storage,$storage);
    }

    function getConnection(){
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            }catch(ServerLoadException $e){
                echo $storage->getName()." is facing huge load\n";
                $storage->report(array('ip'=>'123.23.01','error'=>'Load 404'));
            }catch(NetworkStorage $e){
                echo $storage->getName()." is having some problem with it's network\n";
                $storage->report(array('ip'=>'123.23.02','error'=>'Load 403 network'));
            }catch(DiskFullException $e){
                echo $storage->getName()." has it's disk full\ns";
            }

            if($this->connection){
                break;
            }
        }

        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostGresServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPull();
$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);