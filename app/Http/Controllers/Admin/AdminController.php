<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Privilege;
use Session;
class AdminController extends Controller{
	//登陆
	public function login(){
		if(Request()->isMethod('get')){
			return view('Admin/login');
		}elseif(Request()->isMethod('post')){
			$result = Admin::admin_login(Request()->only('username','password'));
			if($result['status']==200){
				return redirect('index');
			}else{
				return redirect('login')->with('msg',$result['message']);
			}
		}
	}
	//退出
	public function login_out(){
		$result = Admin::loginout();
		if($result['status']==200){	
			return redirect('login');
		}
	}
	//主页--欢迎
	public function welcome(){
		return view('Admin/welcome');
	}
	//后台管理员列表
	public function adminList(){
		$result=Admin::admin_list();
		return view('Admin/adminList',['info'=>$result]);
	}
	//首页
	public function index(){
		if(Request()->isMethod('get')){
			return view('Admin/index');
		}
	}

}