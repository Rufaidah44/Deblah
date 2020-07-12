<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;
use App\Customers;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    
    protected $redirectTo = '/personalpage';
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function personal() {
        $title = "Welcome to Your  Page";
        return view('customer.customerpage') ->with('title', $title );
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    protected function validator(array $data)
    {
        
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
        $uuid = Uuid::generate();

        $this->validate($request, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
            'mobile'        => ['required', 'string', 'min:10', 'regex:/(0)[0-9]/','not_regex:/[a-z]/'],
            

        ]);

        $customer = new Customers([
            'c_ID'                   =>$uuid,
            'c_name'                 => $request['name'],
            'c_email'                => $request['email'],
            'password'               => Hash::make($request['password']),
            'c_phone'                => $request['mobile'],
        ]);

        $customer->save();
        //---------------------------------------

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'customer'
        ]);

        $role = Role::select('id')->where('name','customer')->first();
        $user->roles()->attach($role);
    
        $crd = ['email' => $request['email'],
                'password' =>$request['password'],];
                if(Auth::attempt($crd))
                {
                    return redirect('/personalpage')->with('success', 'مرحبا بك عزيزنا العميل .. تم تسجيلك بنجاح'); 
                }
                else return 'error';

        //return redirect('/personalpage');
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
