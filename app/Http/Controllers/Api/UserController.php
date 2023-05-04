<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\UserFilter;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index(FilterRequest $request)
    {

        $filter = app()->make(UserFilter::class ,(['queryParams'=> array_filter($request->validated())]));

        $users = User::filter($filter)->withTrashed()->with('role')->with('city')->get();
        return UserResource::collection($users);
        // return UserResource::collection(User::withTrashed()->with('role')->with('city')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'login' => ['required'],
            'role_id' => ['required'],
            'city_id' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'login' => $request->login,
            'role_id' => $request->role_id,
            'city_id' => $request->city_id,
            'password' => Hash::make($request->password),
        ]);

        return new UserResource($user);


        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }

    public function show(User $user)
    {
        return new UserResource($user);

    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return $request->validated();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->noContent();
    }
}
