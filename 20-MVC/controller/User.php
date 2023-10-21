<?php 

require DIR.'/model/UserModel.php';

class User{

    public function List(){

        $UserModel = new UserModel();

        $users = $UserModel->listUsers();

        require DIR.'/view/user-list.php';

    }

}


?>