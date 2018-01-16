<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Model\Guest as Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\confirmation;

class GuestController extends Controller
{
    public function __construct( Guest $guest )
    {
        $this->guest = $guest;
    }

    public function index()
    {    
        $data['first_name'] = auth()->user()->first_name;
        $data['form_submit'] = 0;
        $data['logged_in'] = 0;
        
          if (Auth::check()) {
            $data['logged_in'] = 1;
          }

        return view('guests/index', $data);
    }

    public function rsvp()
    {    
        $data =[];
        $guest_id = auth()->user()->id;
        $data['first_name'] = auth()->user()->first_name;


        $guest_data = $this->guest->find( $guest_id );
        $data['is_attending'] = $guest_data->is_attending;
        $data['number_adults'] = $guest_data->number_adults;
        $data['number_children'] = $guest_data->number_children;
        $data['food_allergy'] = $guest_data->food_allergy;
        //$data['email'] = $guest_data->email;
        $data['guest_id'] = $guest_data->id;

        $data['number_attendees'] =[0, 1, 2, 3, 4, 5];
        $data['responded'] = $this->guest->where('id', $guest_id )->value('responded');
        $response = $this->guest->where('id', $guest_id )->value('is_attending');

        $data['message'] = 'We are sorry to miss you at the party.';
        
        if($response == 'Y')
        {
            $data['message'] = 'We will see you at the party.';
        }

        $data['logged_in'] = 0;
        
          if (Auth::check()) {
            $data['logged_in'] = 1;
          }
        
        return view('guests/form', $data);
    }

    public function rsvp_submit( Request $request, Guest $guest )
    {
        $data = [];
        $guest_id = auth()->user()->id;
        $data['is_attending'] = $request->input('is_attending');
        $data['number_adults'] = $request->input('number_adults');
        $data['number_children'] = $request->input('number_children');
        $data['food_allergy'] = $request->input('food_allergy');
        //$data['email'] = $request->input('email');

        // Mail delivery logic goes here

        if( $request->isMethod('post'))
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'is_attending' => 'required',
                    'number_adults' => 'required',
                    'number_children' => 'required',
                    'food_allergy' => 'nullable',
                    //'email' => 'required|email',
                ]           
            );
            
            $guest_data = $this->guest->find( $guest_id );

            $guest_data->is_attending = $request->input('is_attending');
            $guest_data->number_adults = $request->input('number_adults');
            $guest_data->number_children = $request->input('number_children');
            $guest_data->food_allergy = $request->input('food_allergy');
            //$guest_data->email = $request->input('email');
            $guest_data->responded = 'Y';

            $guest_data->save();

            $confirmation = [];
            $confirmation['is_attending'] = $request->input('is_attending');
            

            Mail::to($request->user())->send(new confirmation($guest_data));

            $data['logged_in'] = 0;
            
            if (Auth::check()) {
                $data['logged_in'] = 1;
            }

            $data['form_submit'] = 1;
            $data['first_name'] = auth()->user()->first_name;
            return view('guests/index', $data);
            //return redirect('guests');
        }
        
        $data['logged_in'] = 0;
        
          if (Auth::check()) {
            $data['logged_in'] = 1;
          }

        $data['number_attendees'] =[0, 1, 2, 3, 4, 5];
        $data['update'] = 0;
        $data['first_name'] = auth()->user()->first_name;
        // $data['responded'] = $this->guest->where('id', $guest_id )->value('responded');
        
        return view('guests/form', $data);
    }

    

}
