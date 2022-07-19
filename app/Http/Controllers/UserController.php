<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Room;
use App\Models\User;
use App\Models\Rooms;

class UserController extends Controller
{
    public function index()
    {
        //Lấy ra toàn bộ bản ghi
        // $users = User::all();
        
        //Lấy ra những bảng ghi mong muốn
        $users = User::Select('id', 'name', 'birthday', 'username', 'email', 'avatar')
        //  ->get();
        ->where('id', '>', 3) //(tên trường, toán tử điều kiện, giá trị)
        // ->where('id', '<=', 7)
        ->paginate(5);
        // ->cursorPaginate(5); //Truy vấn where id > 5 limit 5
        // dd($users);
        return view('admin.user.list', compact('users'));
    }
    public function delete($id){
        // if ($id) {
        //     $user = User::find($id);
        //     if($user->delete()){
        //         return redirect()->route('users');
        //     }
        // }

        if ($id) {
            if(User::destroy($id)){
                return redirect()->back();
            }
        }

        
    }
    // public function delete(User $user){
    //     if($user->delete()){
    //         return redirect()->back();
    //     }
    // }
    public function create(){

    //1. Lấy danh sách rooms để bên view select
    $room = Room::select('id', 'name')->get();
        return view('admin.user.create', [
            'rooms'=> $room
        ]);
    }

    public function store(Request $request){
        //1.khởi tạo đối tượng user mới
        $user = new User();
        //2.Cập nhật gias trị cho các thuộc tính của $user
        //$user->name = $request->name;
        $user->fill($request->all());// đặt name ở form 
        //3. Sử lý file avatar gửi lên 
        if ($request->hasFile('avatar')) {
            # Nếu trường avatar có file thì trả về true
            //3.1 Xử lý tên file
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username. '_'. $avatarName;
            // dd($avatarName);
            //3.2 Lưu file và gán đường dẫn cho $user->avatar
            $user->avatar = $avatar->storeAs('images/users', $avatarName);
            
        }else{
            $user->avatar ='';
        }
        //4. Lưu
        $user->save();
        return redirect()->route('users.list');


    }
    public function edit(User $id){
        $rooms = Room::select('id', 'name')->get();
        return view('admin.user.edit', [
            // 'rooms'=> $room
            'user'=>$id,
            'room'=>$rooms

        ]);
    }
    public function update(Request $request, User $id){
        $data = $request->except('id');
        if ($id) {
            $id->update($data);
            return redirect()->route('users.list');
        }
        // dd($data);
    }
}
