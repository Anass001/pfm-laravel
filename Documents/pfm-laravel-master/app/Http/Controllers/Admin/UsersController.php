<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Routing\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return $this->index();
    }
}
