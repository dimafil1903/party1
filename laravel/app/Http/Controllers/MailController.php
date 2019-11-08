<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use Illuminate\Support\Facades\DB;

class MailController extends Controller
{

    public function savemail(Request $request)
    {
        $email = $request->email;

        $emails = DB::table('emails')->where('email', $email)->get();
        if ($emails->isEmpty()) {
            DB::table('emails')->insert(
                ['email' => $email, 'subscribed' => 1]
            );
        }






return back();






    }

}
