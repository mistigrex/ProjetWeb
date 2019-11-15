<?php

namespace App\Http\Controllers;
Use Mail;
use App\User;

use Illuminate\Http\Request;

class MailsController extends Controller
{

    public function alertemail(Request $request)
    {
        $admins = User::select('email')->where('Role_id', '2')->get('email');
        $title = $request->title;
        $content = $request->content;
        
        foreach($admins as $admin){
        $a = 0;

        $emails[$a] = $admin->email;

        $a++;
        };

        try
        {
            $data = ['subject' => $title, 'content' => $content];
            Mail::send('Mails/AlertAdmins', $data, function($message) use($data, $emails)
            {
                $subject=$data['subject'];
                $message->from('simon.caignart@gmail.com');
                $message->to($emails)->subject($subject);
            });
            return redirect('/administrations')->with('success', 'Mail envoyé');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }



    public function sendemail()
    {
        $title = "Boutique du BDE";
        $content = "simon.caignart@gmail.com";
        $user_email = "simon.caignart@viacesi.fr";
        $user_name = "BDE";
        
        try
        {
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
            Mail::send('Mails/ProductPurchased', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('simon.caignart@gmail.com');
                $message->to($data['email'], 'BDE.CESI')->subject($subject);   
            });
             return redirect('/products');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }

    }
 
}
