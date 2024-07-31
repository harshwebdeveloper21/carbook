<?php
// In app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;
use Exception;

class StripeController extends Controller
{
    public function processPayment(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $price = $request->post('payprice');
        
            $charge = Charge::create([
                "amount" => $price, 
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Laravel"
            ]);
    
            $details = [
                'name' => 'Harsing Chaudhari developer',
                'message' => 'This is a test email sent from Stripe payment gateway',
                'price' => $price, // Ensure $price is defined elsewhere
            ];
            
            // Send email
            Mail::to('harsing.fablead@gmail.com')->send(new TestEmail($details));

            session()->flush();
            return response()->json(['success' => true, 'message' => 'Payment successful and email sent.']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Payment failed or mail not sent', 'error' => $e->getMessage()], 500);
        }
    }
    
}
