<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    

    public function index(){


        $users = User::select('id','name','email', 'phone','avatar','birthday','status','role','position')->paginate(5);
        

        if($key=request()->key){
            $users = User::select('id','name','email', 'phone','avatar','birthday','status','role','position')->where('name','like','%'.$key.'%')->orderBy('id','desc')->paginate(5);

        }

      

        return view('admin.user.list',['user_list'=>$users]);
    }


    public function delete(User $user){
        if($user->delete()){
            return redirect()->back();
        }
     }

     private function saveFile($file, $prefixName = '', $folder = 'public')
     {
         $fileName = $file->hashName();
         $fileName = $prefixName
             ? $prefixName . '_' . $fileName
             : $fileName;
 
         return $file->storeAs($folder, $fileName);
     }


     public function create(){

        
        

        return view('admin.user.create');
     }


     public function store(UserUpdateRequest $request){
        //Khởi tạo dt user
        $user = new User();
        //Khởi tạo gtr cho thuộc tính
        $user->fill($request->all()); //đặt namne ở form cùng gtr thuộc tính
        //Xử lý file avt gửi lên
        $user->password=Hash::make($user['password']);

        if($request->hasFile('avatar')){
            //nếu trường avt có file trả về true lưu vào bộ nhwos trả về đường dẫn file

            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username .'-'.$avatarName;
           // $avatar->storeAs('images/users',$avatarName);
            //lưu file và gán đường dẫn cho user avatar
           $user->avatar = $avatar->storeAs('images/users',$avatarName);
                // cấu hình confix filesymtem.php để puplic/images 
                //chạy câu lệnh : php artisan storage : link
        }else{
            $user->avatar='';
        }
        //lưu
        $user->save();

        return redirect()->route('users.list');
     }

     public function edit(User $user){
        $user->birthday = date('Y-m-d', strtotime($user->birthday));
      

        return view('admin.user.edit',['user'=>$user]);
     }



     public function update(UserUpdateRequest $request, User $user) {
        $user->fill($request->except('password'));

        if($request->hasFile('avatar')) {
            $user->avatar = $this->saveFile(
                $request->avatar,
                $request->name,
                'images/users/'
            );
        }
        if($request->password) {
            $user->password = $request->password;
        }

        $user->save();
        return redirect()->route('users.list');
    }

    public function updatePosition(Request $request,$id){

        $updatest=User::find($id);
         $updatest->position = $request->position;
   
         $updatest->save();
   
         return redirect()->route('users.list');
   
        }
    
}
