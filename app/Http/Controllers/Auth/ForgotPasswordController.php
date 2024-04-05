<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Repositories\PasswordResetRepositoryInterface;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Validator;




class ForgotPasswordController extends Controller
{
    protected $passwordResetRepository;

    public function __construct(PasswordResetRepositoryInterface $passwordResetRepository)
    {
        $this->passwordResetRepository = $passwordResetRepository;
    }

    public function showLinkRequestForm(){
        return view('Auth.RestPassword');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $token = Str::random(60);

        // Save the reset token to the repository
        $this->passwordResetRepository->createResetToken($request->email, $token);

        try {
            Mail::to($request->email)->send(new ResetPasswordEmail($token));
            
            return response()->json(['message' => 'Reset link sent successfully'], 200);
        } catch (\Exception $e) {
            // Handle any errors that occur during email sending
            return response()->json(['message' => 'Failed to send reset link'], 500);
        }
    }

    protected function validateEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first('email'));
        }
    }
}










