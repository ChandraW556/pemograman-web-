<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\UsersModel;

    class Users extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model = new UsersModel();
            
            //load seluruh data
            $data['users'] = $model->orderBy('id', 'DESC')->findAll();

            return view('index', $data);
        }
        public function user() {
            //echo "Ini hamanan index pada controller users";
            //buat object dari class UserModel
            $model = new UsersModel();
            
            //load seluruh data
            $data['users'] = $model->orderBy('id', 'DESC')->findAll();

            return view('users_view_all', $data);
        }
        public function create() {
            return view('users_create_user');
        }
        public function store() {
            $model=new UsersModel();

            $data=[
                'name'=>$this->request->getVar('name'),
                'email'=>$this->request->getVar('email'),
                'contact_no' => $this->request->getVar('contact_no'),
                'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('admin/users/user'));
        }
        public function edit($id = null){
            $model = new UsersModel();
            $data['user'] = $model->where('id',$id)->first();

            return view('users_edit_user',$data);
        }
        public function update(){
            $model=new UsersModel();
            $id=$this->request->getVar('id');
            $data=[
                'name'=>$this->request->getVar('name'),
                'email'=>$this->request->getVar('email'),
                'contact_no' => $this->request->getVar('contact_no'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $save=$model->update($id,$data);

            return redirect()->to(base_url('admin/users/user'));          
        }
        public function delete($id = null){
            $model = new UsersModel();
            $data['user'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('admin/users/user'));
        }
    }
?>