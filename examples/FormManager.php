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
            parent::add([
                'username' => $req['username'],
                'message' => $req['message']
            ]);
        }
    }

        /*
     * $req = ['username' => , 'message' =>]
     */
    public function updateMessages($req) {
        if (
            array_key_exists('username', $req) &&
            array_key_exists('message', $req) &&
            array_key_exists('id', $req) &&
            is_string($req['username']) &&
            is_string($req['message']) &&
            is_string($req['id']) &&
            $req['username'] !== '' &&
            $req['message'] !== '' &&
            $req['id'] !== ''
        ) {
            echo "test add method";
            $this->update(
                $req['id'],
                [
                    'username' => $req['username'],
                    'message' => $req['message']
                ]
            );
        }
    }
}