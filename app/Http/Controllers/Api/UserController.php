<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\User;
use App\Utilities\UserError;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @return UserResourceCollection
     */
    public function index() : UserResourceCollection
    {
        $users = User::paginate( env( 'COLLECTION_PAGINATION' ) );

        return new UserResourceCollection( $users );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param User $user
     * @return UserResource|UserError
     */
    public function show( $id )
    {
        $user = User::find( $id );
        if( !$user ){
            $error = new UserError( 'User' , 'Not Found' , 403 );
            return $error->userNotFound();
        }

        return new UserResource( $user );
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
