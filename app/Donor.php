<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Donor;

class Donor extends Model
{
    public static function registerDonors($request){
        $donor  = new Donor;
        $donor->name = $request->name;
        $donor->age = $request->age;
        $donor->bloodgroup = $request->bloodgroup;
        $donor->contactnumber = $request->contactnumber;
        $donor->street = $request->street;
        $donor->city = $request->city;
        $donor->state = $request->state;


        $donor->save();
        
        return $donor;
    }
    // Donor::create([
    //     'name'=>request('name'),
    //     'age'=>request('age'),
    //     'bloodgroup'=>request('bloodgroup'),
    //     'contactnumber'=>request('contactnumber'),
    //     'street'=>request('street'),
    //     'city'=>request('city'),
    //     'state'=>request('state')
    // ]);
}
