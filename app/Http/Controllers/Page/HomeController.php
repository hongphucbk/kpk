<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function getHome()
  {
    
    return view('page.home');
  }

    
    public function postList(Request $req)
    {
        $user_name = $req->user_name;
        Cookie::queue('user_name', $user_name, 20);
        $user_email = $req->user_email;
        Cookie::queue('user_email', $user_email, 20);
        $page = Cookie::get('page');

        $query = User::where('id', '>', 0);
        if (!empty($user_name)) {
            $query = $query->where('name', 'LIKE', '%' . $user_name . '%');
        }

        if (!empty($user_email)) {
            $query = $query->where('email', 'LIKE', '%' . $user_email . '%');
        }

        $insts = $query->paginate(15);
        $oldData = ['user_name' => $user_name,
            'user_email' => $user_email,
        ];
        return view('v1.member.user.list', compact('insts', 'oldData'));
    }

    public function getAdd()
    {
      //$companies = Company::where('is_active', 1)->get();
      return view('v1.member.customer.add');
    }

    public function postAdd(Request $req)
    {
      $this->validate($req,
        [
          'name' => 'required',
          //'email' => 'required|unique:users',
          'phone' => 'required',
          //'password' => 'required|min:3|max:32',
          //'password_confirmation' => 'required|same:password',
        ],
        [
          'name.required' => 'Vui lòng nhập tên',
          'phone.required' => 'Vui lòng nhập số điện thoại',
          //'password.required' => 'Bạn chưa nhập mật khẩu',
          //'password.min' => 'Mật khẩu có ít nhất 3 kí tự',
          //'password.max' => 'Mật khẩu có tối đa 32 kí tự',
          //'password_confirmation.required' => 'Bạn chưa nhập lại mật khẩu',
          //'password_confirmation.same' => 'Mật khẩu nhập lại chưa khớp',
        ]
      );
      try {
        $inst = new Customer;
        $inst->name = $req->name;
        $inst->identity = $req->identity;
        $inst->phone = $req->phone;
        $inst->address = $req->address;
        $inst->note = $req->note;
        $inst->save();

      } catch (\Exception $e) {
        return back()->withErrors('Error');
      }

      return redirect()->back()->with('notify', 'Thêm mới khách hàng thành công')
                               ->with('label', 'success');
    }

    public function getEdit($id)
    {
      $inst = Customer::find($id);
      return view('v1.member.customer.edit', compact('inst'));
    }

    public function postEdit($id, Request $req)
    {
      $this->validate($req,
      [
        'name' => 'required',
        //'email' => 'required',
        'phone' => 'required',
      ],[

      ]
      );
      try {
        $inst = Customer::find($id);
        $inst->name = $req->name;
        $inst->phone = $req->phone;
        $inst->address = $req->address;
        $inst->identity = $req->identity;
        $inst->is_active = $req->is_active == "on" ?1: 0;
        $inst->note = $req->note;
        $inst->save();
      } catch (\Exception $e) {
          //\Log::debug($e);
          return back()->withErrors('Error');
      }

      return redirect()->back()->with('notify', 'Chỉnh sửa thành công')
                               ->with('label', 'success');
    }

    public function getDelete($id)
    {
        DB::table('common_module_user')->where('user_id', $id)->delete();
        $this->userRepository->delete($id);
        return redirect()->back()->with('notify', 'Delete successful');
    }

    /**
     * Show single post
     *
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        return view('home.post', compact('post'));
    }

    
    

    
    
    
}
