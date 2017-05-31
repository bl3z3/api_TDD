<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateController extends Controller
{
    /**
     * API Login, on success return JWT Auth token
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illimunate\Http\JsonResponse
     */

    public function authenticate(Request $request)
    {
    	//get credentials from the request
    	$credentials = $request->only('email', 'password');

    	try {
    		//attempt to verify the credentials and create a token for the user
    		if (!$token = JWTAuth::attempt($credentials)) {
    			return response()->json(['error' => 'Invalid credentials'], 401);
    		}
    	} catch (JWTException $e) {
    		//something wrong when creating the token
    		return response()->json(['error' => 'Could_not_create_token_error'], 500);
    	}

    	//create token
    	return response()->json(compact('token'));
    }

    /**
     * Logout
     * Invalidate the token, so user cannot use it anymore
     *They have to relogin to get a  new token
     * @param Request $request
     */

    public function logout(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        JWTAuth::invalidate($request->input('token'));
    }

    /**
     * Returns the authenticated user
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function authenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['User_not_found'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }

        //the token is valid and we have found the user
        return response()->json(compact('user'));
    }

    /**
     * Refresh the token
     *
     * @return mixed
     */

    public function getToken()
    {
        $token = JWTAuth::getToken();

        if (!$token) {
            return $this->response->errorMethodNotAllowed('Token not provided');
        }

        try {
            $refreshedToken = JWTAuth::refresh($token);
        } catch (JWTException $e) {
            return $this->response->errorInternal('Not able to refresh Toekn');
        }

        return $this->response->withArray(['token' => $refreshedToken]);
    }
}
