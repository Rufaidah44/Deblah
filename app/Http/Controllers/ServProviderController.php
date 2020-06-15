<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServProviders;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class ServProviderController extends Controller
{
    protected $redirectTo = '/servproviderpage';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }
    public function signup()
    {
        return view('providers.servprovidersignup');
    }
    public function personal()
    {
        return view('providers.servproviderpage');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uuid = Uuid::generate();

        $this->validate($request, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
            'mobile'        => ['required', 'string', 'min:10', 'regex:/(0)[0-9]/','not_regex:/[a-z]/'],
            'servtype'      => ['required']

        ]);

        $serprovider = new ServProviders([
            'p_ID'                  =>$uuid,
            'p_owner_name'          => $request['name'],
            'p_email1'              => $request['email'],
            'password'              => Hash::make($request['password']),
            'p_mobile1'             => $request['mobile'],
            'p_serv_type'           => $request['servtype']
        ]);

        $serprovider->save();

        return redirect('/servproviderpage')->with('success', 'مرحبا بك .. تم تسجيلك بنجاح');
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
