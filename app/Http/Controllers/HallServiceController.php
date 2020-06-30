<?php

namespace App\Http\Controllers;

use App\HallServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;
use App\HallAvailableDates;

class HallServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suid = Uuid::generate();

        

        $this->validate($request, [            
            'h_name'                => ['required', 'string', 'max:255'],
            'h_type'                => ['required', 'string', 'max:255'],
            'h_age'                 => ['required', 'string', 'max:255'],
            'h_city'                => ['required', 'string', 'max:255'],
            'h_address'             => ['required', 'string', 'max:255'],
            'h_location'            => ['required', 'string', 'max:255'],
            'h_national_address'    => ['required', 'string', 'max:255'],
            'female_no'             => ['required', 'integer', 'digits_between: 0, 800'],
            'male_no'               => ['required', 'integer', 'digits_between: 0,800'],
            'female_services_room'  => ['required', 'string', 'max:255'],
            'hall_photos'           => ['required'],
            'h_dates'               => ['required'],
        ]);



        $newhall = HallServices::create([
            's_ID'                  =>$suid,
            'p_ID'                  =>Auth::user()->id,
            'h_status'              =>'AVAILABLE', 
            'h_name'                => $request['h_name'],
            'h_type'                => $request['h_type'], 
            'h_age'                 => $request['h_age'], 
            'h_city'                => $request['h_city'], 
            'h_address'             => $request['h_address'], 
            'h_location'            => $request['h_location'], 
            'h_national_address'    => $request['h_national_address'],
            'female_hold'           => $request['female_hold'], 
            'male_hold'             => $request['male_hold'],
            'female_no'             => $request['female_no'],
            'male_no'               => $request['male_no'], 
            'female_hosting_food'   => $request['female_hosting_food'],
            'male_hosting_food'     => $request['male_hosting_food'],
            'female_denner'         => $request['female_denner'],
            'male_denner'           => $request['male_denner'],
            'female_waiters'        => $request['female_waiters'],
            'male_waiters'          => $request['male_waiters'], 
            'female_cleaners'       => $request['female_cleaners'], 
            'male_cleaners'         => $request['male_cleaners'], 
            'female_abayah_serve'   => $request['female_abayah_serve'], 
            'kosha'                 => $request['kosha'], 
            'speakers'              => $request['speakers'], 
            'female_decoration'     => $request['female_decoration'], 
            'vip_room'              => $request['vip_room'], 
            'female_services_room'  => $request['female_services_room'], 
            'hall_photos'           => $request['hall_photos'],
        ]);
        
        $savehall = $newhall->save();

        $dateString = $request['h_dates'];
        $dateArray = explode(',', $dateString);


        foreach($dateArray as $date){ 
            $availabledates = HallAvailableDates::create([
                's_ID'              => $suid,
                'date'              => $date,
                'status'            =>'AVAILABLE'
            ]);

            if($savehall)
                $availabledates->save();
         }

            return redirect('/myservices')->with('success', 'تمت إضافة القاعة بنجاح');
        }
    
        
            
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
