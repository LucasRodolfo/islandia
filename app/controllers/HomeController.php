<?php
use Illuminate\Support\Facades\Input;

/**
 * Class HomeController
 */
class HomeController extends BaseController
{

	public function showHome()
	{
        if (Auth::guest())
        {
            return View::make('home');
        }
        else
        {
            return View::make('list');
        }
	}


	/**
	 * Function that shows the login screen
	 *
	 * @return \Illuminate\View\View
	 */
	public function showLogin()
    {
		//only if no user is logged in!
		if (Auth::guest())
		{
			return View::make('login');
		}
    }

	/**
	 * Function that logs the user in
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function doLogin()
    {
        // Input rules
        $rules = [
			'email' => 'required|email', // checking if it is a valid email
            'password' => 'required|alphaNum|min:6'
        ];

		// Validating the input
        $validator = Validator::make(Input::all(), $rules);

		// If failed, redirect back
        if ($validator->fails())
		{
            return Redirect::to('login')
                ->withErrors($validator) // sending the errors
                ->withInput(Input::except('password')); // sending the data, without password
        }
		else
		{

            // Let's check the data against the database!

			// First, we'll format it
            $loginData = [
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ];

            // Then, we'll test it
            if (Auth::attempt($loginData))
			{
				//TODO: Create the landing page
				// In case of success...
                return Redirect::to('list');
            }
			else
			{
				//Error!
				//TODO: Log the error, send back with messages
                return Redirect::to('login')->with(['loginError' => 'Usuário ou senha inválidos']);

            }

        }
    }

	/**
	 * Function that logs a user out
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function doLogout()
    {
		//TODO: Log this

		// Check if we REALLY have a logged in user
		if (Auth::user())
		{
			Auth::logout(); //
			return Redirect::route('home'); // redirect the user to the login screen
		}
		else
		{
			return Redirect::to('home');
		}
    }


}
