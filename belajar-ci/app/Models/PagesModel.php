<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class PagesModel extends Model {
        protected $table = 'halaman';

        protected $allowedFields = ['judul', 'author','isi'];
    }
?>