<?php

/**
 * @author Ebubekir Yazgan
 * @license MIT
 * @name Db
 * @date 26.05.2022 09:42:41
 */

use SleekDB\Query;
use SleekDB\Store;

/**
 *
 */
class Db{
    /*
    todo: Insert
    todo: Update
    todo: Delete
    todo: Select
    */

    /**
     * @var String
     */
    private $directory;

    /**
     * @var array
     */
    private $configuration;

    /**
     * @param String $directory
     * @param array $configuration
     */
    public function __construct($directory, $configuration)
    {
        $this->directory = $directory;
        $this->configuration = $configuration;
    }

    /**
     * @param $table
     * @return Store|void
     */
    private function connect($table){
        try {
            $return = new Store($table, $this->directory, $this->configuration);
        } catch (\Exception $e){
            $return = false;
            die($e->getMessage());
        }
        return $return;
    }

    /**
     * @param String $table
     * @param array $data
     * @return array|void
     */
    public function insert($table, $data)
    {
        $db = $this->connect($table);
        try {
            $return = $db->insert($data);
        } catch (\Exception $e){
            $return = false;
            die($e->getMessage());
        }
        return $return;
    }


    /**
     * @param String $where
     * @param String $table
     * @param array $data
     * @return bool|void
     */
    public function update($where, $table, $data)
    {
        $db = $this->connect($table);
        try {
            $db->updateById($where, $data);
            $return  = true;
        } catch (\Exception $e){
            $return = false;
            die($e->getMessage());
        }
        return $return;
    }

    /**
     * @param array $where
     * @param String $table
     * @param bool $idStatus
     * @return void
     */
    public function delete($where, $table, $idStatus)
    {
        $db = $this->connect($table);
        if ($idStatus){
            try {
                $db->deleteById($where[1]);
            } catch (\Exception $e){
                die($e->getMessage());
            }
        } else {
            try {
                $db->deleteBy([$where[0], '=' , $where[1]]);
            } catch (\Exception $e){
                die($e->getMessage());
            }
        }
    }

    /**
     * @param array $where
     * @param String $table
     * @param String $selectMode
     * @return array|null
     * @throws \SleekDB\Exceptions\IOException
     * @throws \SleekDB\Exceptions\InvalidArgumentException
     */
    public function select($where, $table, $selectMode)
    {
        $db = $this->connect($table);

        if ($selectMode == 'all'){
            $return = $db->findAll();
        } else if ($selectMode == 'id'){
            $return = $db->findById($where['1']);
        } else if ($selectMode == 'where'){
            $return = $db->findBy(array($where[0], '=', $where['1']));
        }
        return $return;
    }
}
