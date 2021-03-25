<?php
class Controller
{
    private $file_name = 'db.json';
    private $db = [];

    public function __construct() {
        if (file_exists($this->file_name)) {
            $json_db = file_get_contents($this->file_name);
            $db = json_decode($json_db, true);
            if (is_array($db)) {
                $this->db = $db;
            }
        }
    }

    public function add($id, $new_value) {
        $this->db['links'][$id] = $new_value;
        file_put_contents($this->file_name, json_encode($this->db));
    }

    public function increase($id) {
        if (array_key_exists($id, $this->db['links'])) {
            $value = $this->db['links'][$id];
        }
        else {
            $value = $id;
        }
        $this->add($id, ++$value);
    }

    public function getAll() {
        return $this->db['links'];
    }

}