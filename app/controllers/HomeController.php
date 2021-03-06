<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	

	public function homepage()
	{    


      return View::make('hello');
	
	}





  public function signup()
	{



   $rules = array(
	
        'fname' => 'required',
		'lname' => 'required',
        'username' => 'required|unique:droom',
        'password' => 'required|min:8',
        'email' => 'required|email|unique:droom'
    ) ;
	
	

    $validator = Validator::make(Input::all(), $rules);

    if ( $validator->fails() )
		
		{  
		//return "error";
		//$a = "wrong" ;
		//return Redirect::to('/')->with('a',$a) ;
		return Redirect::to('/')->withErrors($validator,'signup');

		 
			
			}
	 

    $fname = Input::get('fname');
	
	 $lname = Input::get('lname');
	 
	  $email = Input::get('email');
	  
	  $username = Input::get('username');
	  
	  $password = Input::get('password');
	

   
        DB::table('droom')->insert(array(
       'fname'=> $fname,
        'lname'=> $lname,
        'email'=> $email,
        'username'=> $username,
        'password'=> $password,

     ) );
  
  
  
         return View::make('firstlogin') ;
   




	}
	
	
	
	
	
	  public function login()
	  
	  {
		  
		  $rules = array(
	
        
        'username' => 'required',
        'password' => 'required'
         ) ;
	
	

    $validator = Validator::make(Input::all(), $rules);

    if ( $validator->fails() )
		
		{   
		
		
		   return Redirect::to('/')->withErrors($validator,'login');
			
			}
	 
	 
	 
	 
	 
	 
	 
	 
	  
	 $username = Input::get('username');
	 $password = Input::get('password');
	
        
   
   
         if (DB::table('droom')->where('username',$username)->where('password',$password)->count()>0)
          {
		  
		  $userinfo = DB::table('droom')->where('username',$username)->where('password',$password)->first();
		  
		  
		  Session::put('id',$userinfo->id);
		  
		    Session::put('username',$userinfo->username);
			  Session::put('password',$userinfo->password);
			    Session::put('email',$userinfo->email);
				  Session::put('fname',$userinfo->fname);
				    Session::put('lname',$userinfo->lname);
					 Session::put('tm',$userinfo->tm);
					  Session::put('picpath',$userinfo->picpath) ;
		  
		 
		 
		 
		
                    return View::make('userinfo')->with('userinfo',$userinfo) ;
		  
		  
		  

            }

                    else
                           {
                           echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           INCORRECT USERNAME OR PASSWORD </i> ';
			                return View::make('hello'); 
  
                            }
		  
	 }
	
	
	
	
	
	
		public function logout()
	{    
        
		
		$a = date("d-m-y h:i:s");
		
		 DB::table('droom')->where('id',Session::get('id') )->update(array(
       
        'tm'=> $a

     ) );
		
		
		
      Session::flush();
      return Redirect::to('/');
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		public function edit1()
	{    
                    if(Session::has('id') )
                    return View::make('epass');
                    
                    else return "You are logged out. Please login again !!" ;
	
	}

	
	
		
		public function edit2()
	{    
	
	   
      $password = Input::get('password');
      if (Session::get('password')== $password )
      return View::make('edit');
  
     echo "You Entered Wrong Password";
	 
		 return View::make('epass'); 
	
	}

	
	
	
	public function edit3()
	{    
	
	 
	
	 
	  $email = Input::get('email'); 
	  
	  if($email=='')
	{
		$email = Session::get('email');
		
	}
	  
	  $username = Input::get('username');
	  
	  	  if($username=='')
	{
		$username = Session::get('username');
		
	}
	  
	  $password = Input::get('password');
	  
	  	  if($password=='')
	{
		$password = Session::get('password');
		
	}
	 
	 
	   
        $rule = array(
	
      
        'username' => 'unique:droom',
        'password' => 'min:8',
        'email' => 'email|unique:droom'
    ) ;
	
	

    $validator2 = Validator::make(Input::all(), $rule);

    if ( $validator2->fails() )
		
		{  
		//return "error";
		
		
		return Redirect::to('etemp')->withErrors($validator2);

		 
			
			}
	 
  $a= (Session::get('id') ) ; 
   
   DB::table('droom')->where('id', $a )-> update(array(
       
        'email'=> $email,
        'username'=> $username,
        'password'=> $password,

     ) );
	 
	 
	 $userinf = DB::table('droom')->where('username',$username)->where('password',$password)->first();
		  
		  
		  
		  
		  
		    Session::put('username',$userinf->username);
			  Session::put('password',$userinf->password);
			    Session::put('email',$userinf->email);
				  
	 
	 
  
  return Redirect::to('updated');
   
	}

		
	
	
	
	//login1 
	
	 public function login1()
	  
	  {
		  
		  $rules = array(
	
        
        'username' => 'required',
        'password' => 'required'
         ) ;
	
	

    $validator = Validator::make(Input::all(), $rules);

    if ( $validator->fails() )
		
		{   
		
		
		   return Redirect::to('login1temp')->withErrors($validator);
			
			}
	 
	 
	 
	 
	 
	 
	 
	 
	  
	 $username = Input::get('username');
	 $password = Input::get('password');
	
        
   
   
         if (DB::table('droom')->where('username',$username)->where('password',$password)->count()>0)
          {
		  
		  $userinfo = DB::table('droom')->where('username',$username)->where('password',$password)->first();
		  
		  
		  Session::put('id',$userinfo->id);
		  
		    Session::put('username',$userinfo->username);
			  Session::put('password',$userinfo->password);
			    Session::put('email',$userinfo->email);
				  Session::put('fname',$userinfo->fname);
				    Session::put('lname',$userinfo->lname);
					 Session::put('tm',$userinfo->tm);
					  Session::put('picpath',$userinfo->picpath) ;
		  
		 
		 
		 
		 

         return View::make('userinfo')->with('userinfo',$userinfo) ;
		  
		  
		  

            }

                    else
                           {
                           echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           INCORRECT USERNAME OR PASSWORD </i> ';
			                return View::make('firstlogin'); 
  
                            }
		  
	 }
	
	
	
	
	//fpass 
	
    

	public function fpass()
	
	{
		
	  $email = Input::get('email');
	  
	  $username = Input::get('username');
	  
	  if(DB::table('droom')->where('username',$username)->count()>0)
		  
		  { if (DB::table('droom')->where('email',$email)->count()>0)
				  
				  {
				    Session::put('username',$username) ;
				
				   return View::make('changepass') ;

				  }
			  
			     
				 
			else 
				
			    { echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           Email does not exist ! </i> ';
		
				 return View::make('forgotpass');  
				}
		
		  }
		
		
		else 
			
			{

  
             echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           User does not Exist ! </i> ';
			return View::make('forgotpass');  }
		
		
		
	}
	
	
	
	
	//change pass
	
	public function changepass()
	
	{
		
		$rules = array(
	
        
        'password' => 'required|min:8',
        'pass' => 'required|min:8'
         ) ;
	
	

    $validator = Validator::make(Input::all(), $rules);

    if ( $validator->fails() )
		 
		
		   return Redirect::to('passtemp')->withErrors($validator);
			
	
		
		
		$password = Input::get('password');
		
		$pass = Input::get('pass');
		
		
		if($password!== $pass)
			
			{
				echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           Confirm Your Password again !!!! </i> ';
				return View::make('changepass');
				
			}
		
		
		
		 DB::table('droom')->where('username', Session::get('username') )-> update(array(
       
        'password'=> $password

     ) );
	 
	 return View::make('fpfinal');
		
		
		
		
		
		
	}
	
	
	
	
	
	// login2
	
	
	 public function login2()
	  
	  {
		  
		  $rules = array(
	
        
        'username' => 'required',
        'password' => 'required'
         ) ;
	
	

    $validator = Validator::make(Input::all(), $rules);

    if ( $validator->fails() )
		
		{   
		
		
		   return Redirect::to('login2temp')->withErrors($validator);
			
			}
	 
	 
	 
	 
	 
	 
	 
	 
	  
	 $username = Input::get('username');
	 $password = Input::get('password');
	
        
   
   
         if (DB::table('droom')->where('username',$username)->where('password',$password)->count()>0)
          {
		  
		  $userinfo = DB::table('droom')->where('username',$username)->where('password',$password)->first();
		  
		  
		  Session::put('id',$userinfo->id);
		  
		    Session::put('username',$userinfo->username);
			  Session::put('password',$userinfo->password);
			    Session::put('email',$userinfo->email);
				  Session::put('fname',$userinfo->fname);
				    Session::put('lname',$userinfo->lname);
					 Session::put('tm',$userinfo->tm);
					  Session::put('picpath',$userinfo->picpath) ;
		  
		 
		 
		 
		 

         return View::make('userinfo')->with('userinfo',$userinfo) ;
		  
		  
		  

            }

                    else
                           {
                           echo '<i style="color:red;font-size:30px;font-family:calibri ; text-align:center;">
                           INCORRECT USERNAME OR PASSWORD </i> ';
			                return View::make('fpfinal'); 
  
                            }
		  
	 }
	
	
	
	
	
	public function upload1()
	
	{
		if (Session::has('id'))
	  return View::make('upload1');	
                
                else return "You are logged out. Please login again !";
	
	}
	
	
	
	//upload2
	
		
	public function upload2()
	
	{  
		//$a = Input::file('file') ; print_r($a); die;
		$image = array('file'=> Input::file('file') ) ;
               // print_r($image) ;die;
                
		$rule = array('file' => 'required');
		
		$validation = Validator::make($image,$rule);
		
		

		
		if( $validation->fails() )
			
			{      //print_r($validation) ; die;
				return Redirect::to('upload1')-> withErrors($validation);
				
				
			}  
		
     
	 else
	 {  

      

	    if(Input::file('file')->isValid() );
		
		
		{
	 $file = Input::file('file');
	 
	 $picname= $file->getClientOriginalName();
	 $uniquename = rand(11111,22222).$picname ;
	 $picsize = $file->getSize();
	 $picext = $file->getClientOriginalExtension();
     $fullpath = $file->move('upload/',$uniquename) ;	
	 $realpath = str_replace('\\','/',$fullpath) ;
		
		//print_r($realpath); die;
		
		 $a= (Session::get('id') ) ; 
   
   DB::table('droom')->where('id', $a )-> update(array(
       
        'picpath'=> $realpath

     ) );
	   
	  Session::put('picpath',$realpath) ;
	  return Redirect::to('upload3');
	  
		}
	
	  }
	
	}
	
	
	
	
	
	
		public function upload3()
		
		{
			
			
			return View::make('upload3');
			
			
			
		}
	
	
	
	
	
	
	
	
}

