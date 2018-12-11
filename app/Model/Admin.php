<?php
namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Session;

class Admin{
	//登陆
	public static function admin_login($info){
		$user = DB::table('hy_admin_user')->where('username',$info['username'])->first();
		if(empty($user)){
			$result['status']=404;
			$result['message']='该用户不存在';
			return $result;
		}else{
			if($user->username != $info['username'] & $user->password == md5($info['password'])){
				$result['status']=403;
				$result['message']='用户名输入错误';
				return $result;
			}elseif($user->username==$info['username'] & $user->password!=md5($info['password'])){
				$result['status']=402;
				$result['message']='密码输入错误';
				return $result;
			}else{
				//登录成功修改最后登录时间
				DB::table('hy_admin_user')->where('username',$info['username'])->update(['login_status'=>1,'last_login'=>date('Y-m-d H:i:s')]);
				//登陆成功是，将登陆用户的id，姓名，以及身份存入session
				$userinfo=array('id'=>$user->id,'username'=>$user->username,'is_super'=>$user->is_super);
				Session::put('userinfo',$userinfo);
				$result['status']=200;
				$result['message']='登陆成功';
				return $result;
			}
		}
	}
	//退出
	public static function loginout(){
		//将登录状态变为0---未登录
		$res = DB::table('hy_admin_user')
			->where('id',Session::get('userinfo')['id'])
			->update(['login_status'=>0]);
		if($res){
			Session::flush();//清除所有session信息
			$result['status']=200;
			$result['message']='退出成功';
			return $result;
		}
	}

}