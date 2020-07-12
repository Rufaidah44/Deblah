<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ServProviders;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use AuthenticatesUsers; 

class ServProviderController extends Controller
{
    

    protected $redirectTo = '/servproviderpage';

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $userinfo = ServProviders::where('p_ID','=', Auth::user()->uid)->first();
        
        return view('providers.servproviderpage')->with('userinfo',$userinfo);
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

        $user = User::create([
            'uid'   => $uuid,
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'service provider'
        ]);

        $role = Role::select('id')->where('name','service provider')->first();
        $user->roles()->attach($role);
        $user->save();

        $theuser = User::find(2);


        dd($theuser) ;
               
        $crd = ['email' => $request['email'],

                'password' =>$request['password'],];
                if(Auth::attempt($crd))
                {
                    return redirect('/servproviderpage')->with('success', 'مرحبا بك عزيزنا مقدم الخدمات .. تم تسجيلك بنجاح');
                }
                else return 'error';

        
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        $this->validate($request, [
            'p_owner_name' => 'required',
            'p_agent_name1' => 'required',
            'p_email1' => 'required',
            'p_mobile1' => 'required',
            'p_commercal_record_no' => 'required',
            'p_bank_name' => 'required',
            'p__bank_iban' => 'required',
            'experience_years' => 'required',
        ]);
        
        $id = Auth::user()->uid;
        $user = Auth::user()->servproviders;
        //  = ServProviders::where('p_ID','=', $id)->first();

        
        $user->p_owner_name = $request->p_owner_name;
        $user->p_agent_name1 = $request->p_agent_name1;
        $user->p_agent_name2 = $request->p_agent_name2;
        $user->p_email1 = $request->p_email1;
        $user->p_email2 = $request->p_email2;
        $user->p_phone = $request->p_phone;
        $user->p_mobile1 = $request->p_mobile1;
        $user->p_mobile2 = $request->p_mobile2;
        $user->p_commercal_record_no = $request->p_commercal_record_no;
        $user->p_bank_name = $request->p_bank_name;
        $user->p__bank_iban = $request->p__bank_iban;
        $user->experience_years = $request->experience_years;

        $user->save();

        if($user)
        return redirect('/myProfile')->with('success', 'تم تحديث البيانات بنجاح');


        
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
