<?php
class DataManager
{
    private $file_name = 'example_db.json';
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

    protected function save() {
        $content = json_encode($this->db);
        file_put_contents($this->file_name, $content);
    }

    public function add($value) {
        $this->db[] = $value;
        $this->save();
    }

    public function getAll() {
        return $this->db;
    }
}