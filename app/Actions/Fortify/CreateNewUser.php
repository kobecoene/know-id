<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:10'],
            'motivation' => ['required', 'string'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
//            'portfolio' => ['required','mimes:csv,txt,xlx,xls,pdf', 'max:2048'],
//            'cv' => ['required','mimes:csv,txt,xlx,xls,pdf', 'max:2048']
        ])->validate();

//
//        if ($portfolio = $input['portfolio']) {
//            $destinationPath = 'files/portfolio/';
//            $profileImage1 = date('YmdHis') . "." . $portfolio->getClientOriginalExtension();
//            $portfolio->move($destinationPath, $profileImage1);
//            $input['portfolio'] = "$profileImage1";
//        }
//
//        if ($cv = $input['cv']) {
//            $destinationPath = 'files/cv/';
//            $profileImage = date('YmdHis') . "." . $cv->getClientOriginalExtension();
//            $cv->move($destinationPath, $profileImage);
//            $input['cv'] = "$profileImage";
//        }

        return User::create([
            'name' => $input['name'],
            'firstname' => $input['firstname'],
            'email' => $input['email'],
            'city' => $input['city'],
            'postcode' => $input['postcode'],
            'password' => Hash::make($input['password']),
            'motivation' => $input['motivation'],
            'portfolio' => 'test',
            'cv' => 'test',
            'skill_id' => 1,
        ]);
    }
}
