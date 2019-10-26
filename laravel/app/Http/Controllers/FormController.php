<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FormController extends MainController
{
    public function takeinfo(Request $request) {
        if ($request->isMethod('post')) {
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $position = $request->position;
            $message = $request->message;
            DB::table('user_requests')->insert([
                ['email' => $email, 'first_name'=>$first_name,'last_name'=>$last_name,'phone'=>$phone,'position'=>$position,'message'=>$message,'created_at'=>date("Y-m-d H:i:s")]
            ]);

            return  back()->withInput();


        }else{
            return redirect('/');
        }

    }
    public function takemsg(Request $request) {
        if ($request->isMethod('post')) {
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $message = $request->message;
            DB::table('new_messages')->insert([
                ['email' => $email, 'first_name'=>$first_name,'last_name'=>$last_name,'phone'=>$phone,'message'=>$message,'created_at'=>date("Y-m-d H:i:s")]
            ]);
            return  back()->withInput();


        }else{
            return redirect('/');
        }

    }


}
