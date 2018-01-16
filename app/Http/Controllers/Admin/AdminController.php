<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Guest as Guest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct( Guest $guest )
    {
        $this->guest = $guest;
    }

    public function viewGuests()
    {
        $data = [];
        $data['guests'] = $this->guest->all();
        $data['total_adults'] = $this->guest->sum('number_adults');
        $data['total_children'] = $this->guest->sum('number_children');
        $data['logged_in'] = 0;
        
          if (Auth::check()) {
            $data['logged_in'] = 1;
          }
        return view('admin/guestLists', $data);
    }

    public function newGuest( Request $request, Guest $guest )
    {
        $data = [];
        $data['first_name'] = $request->input('first_name');
        $data['last_name'] = $request->input('last_name');
        $data['password'] = $request->input('password');
        $data['is_attending'] = $request->input('is_attending');
        $data['number_adults'] = $request->input('number_adults');
        $data['number_children'] = $request->input('number_children');
        $data['food_allergy'] = $request->input('food_allergy');
        $data['email'] = $request->input('email');

        if( $request->isMethod('post'))
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'password' => 'required',
                    'is_attending' => 'required',
                    'number_adults' => 'required|between:1,5',
                    'number_children' => 'required',
                    'food_allergy' => 'nullable',
                    'email' => 'nullable',
                ]           
            );

            $guest->insert($data);
            return redirect('admin/guests');
        }

        $data['update'] = 0;
        $data['number_attendees'] =[0, 1, 2, 3, 4, 5];
        $data['logged_in'] = 0;
        
          if (Auth::check()) {
            $data['logged_in'] = 1;
          }

        return view('admin/createNewGuest', $data);
    }
}
