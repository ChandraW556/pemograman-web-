<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class UsersModel extends Model {
        protected $table = 'users';

        protected $allowedFields = ['name', 'email','contact_no', 'password'];
    }
?>