<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class EmailController extends Controller
{
    public function basic_email()
    {
        $data = ['name' => 'Harsing Chaudhari developer'
    
    
    ];
    
        if (is_null($data)) {
            return "Data is null";
        }

        try {
            Mail::send('basic', $data, function($message) {
                $message->to('harsing.fablead@gmail.com', 'Recipient Name')
                        ->subject('Test Email');
                $message->from('harsing.fablead@gmail.com', 'Sender Name');
            });
            
            return "Test email sent.";
        } catch (Exception $e) {
            return response()->json(['message' => 'Mail not sent', 'error' => $e->getMessage()], 500);
        }
    }

    public function html_email()
    {
        $data = ['name' => "Virat Gandhi"];

        try {
            Mail::send('html', $data, function($message) {
                $message->to('harsing.fablead@gmail.com', 'Tutorials Point')
                        ->subject('Laravel HTML Testing Mail');
                $message->from('harsing.fablead@gmail.com', 'Virat Gandhi');
            });

            return "HTML Email Sent. Check your inbox.";
        } catch (Exception $e) {
            return response()->json(['message' => 'Mail not sent', 'error' => $e->getMessage()], 500);
        }
    }
}
