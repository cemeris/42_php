<?php
class FormManager extends DataManager
{
    /*
     * $req = ['username' => , 'message' =>]
     */

    public function add($req) {
        if (
            array_key_exists('username', $req) &&
            array_key_exists('message', $req) &&
            is_string($req['username']) &&
            is_string($req['message']) &&
            $req['username'] !== '' &&
            $req['message'] !== ''
        ) {
            echo "test add method";
        }
    }
}