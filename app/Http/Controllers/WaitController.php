<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wait;

use Mail;
use App\Mail\Mailer;

class WaitController extends Controller
{
    public function index(){
        return view('wait.index');
    }

    public function store(Request $request){
        $validate_array = array(
            'first_name'=>'required',
            'last_name'=>'required',
            'signupSrEmail'=>'required',            
        );
        $request->validate($validate_array);    

        $wait = Wait::all();
        if (Wait::where('email', '=', $request->get('signupSrEmail'))->exists()) {
            return redirect('/wait')->with('wait_register', "This user alreay registerd.");
        }
        else{
            $options = new Wait([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('signupSrEmail'),
            ]);
            $options->save();
            return redirect('/wait')->with('wait_register', "We've added you to a waiting list, and let you know when our pilot ends and your account is open.");
        }       
    }

    public function sendmail(Request $request){
        $validate_array = array(
            'send_firstname'=>'required',
            'send_lastname'=>'required',
            'send_email'=>'required',           
            'send_text'=>'required',
        );
        $request->validate($validate_array);   

        $first_name = $request->get('send_firstname');
        $last_name = $request->get('send_lastname');
        $send_text = $request->get('send_text');
        
        $emailFrom =$request->get('send_email');
        // $to = "clinicnotes2014@gmail.com";
        $to = "ilonka.melochek01@gmail.com";
        $subject = "Contact Us";

        $message = '<body >
            <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                  <tr>
                    <td style="font-size:14px; color:#323232">Fist Name</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px; font-weight:bold"><strong>' . $first_name .'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">Last Name :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$last_name .'</strong></td>
                  </tr>
                   <tr>
                    <td style="font-size:14px; color:#323232">Message :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$send_text.'</strong></td>
                  </tr>                  
                </table>
            </div>
        </body>
        ';
 
        $headers = "From:" . $emailFrom . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
      
        mail($to,$subject,$message,$headers);

        // $details = [
        //     'to' => $to,
        //     'from' => $emailFrom,
        //     'subject' => $subject,            
        //     "body"  => $send_text,
        // ];

        // Mail::to($to)->send(new Mailer($details));

        // if (Mail::failures()) {
        //     return redirect('/wait')->with('mail_sent', "Not sending mail.. retry again...");            
        // }


        Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
            {
                $message->subject('Mailgun and Laravel are awesome!');
                $message->from('no-reply@website_name.com', 'Website Name');
                $message->to('ilonka.melochek01@gmail.com');
            });

        // return response()->json([
        //     'status'  => true,
        //     'data'    => $details,
        //     'message' => 'Your details mailed successfully'
        // ]);

       
        return redirect('/wait')->with('mail_sent', "Your email successfully sent.");

      

    }
}
