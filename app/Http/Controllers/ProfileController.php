<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function adminProfile(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){

                $data = Book::OrderBy('created_at', 'desc')->take(6)->get();
                return view('home.index', compact('data'));
            }
            else if($usertype == 'admin'){

                $data = User::all();
                return view('admin.index', compact('data'));
            }
            else{
                return back();
            }
        }
    }

    // this is homepage function
    public function home(){

        // $data = Book::all()->take(6);

        $data = Book::OrderBy('created_at', 'desc')->take(6)->get();

        return view ('home.index', compact('data'));
    }

    // add a book function
    public function add_book(){
        return view('admin.add_book');
    }

    // upload data into DB of room table
    public function upload_book(Request $request){

        $data = new Book();

        $data->title = $request->title;
        $data->author = $request->author;
        $data->description = $request->description;
        // $data->book_type = $request->book_type;
        $data->current_price = $request->current_price;
        $data->book_weight = $request->book_weight;
        $data->delivery_charges = $request->delivery_charges;
        $data->total_price = $request->total_price;

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('book', $imagename);

            $data->image = $imagename;

        }

        $data->save();

        return redirect()->back();
    }

    // view the book
    public function view_book(){

        $data = Book::all();

        return view('admin.view_book', compact('data'));
    }

    // view the book
    public function delete_book($id){

        $data = Book::find($id);

        $data->delete();

        return redirect()->back();
    }

    // edit/update the book
    public function edit_book($id){

        $data = Book::find($id);

        return view('admin.edit_book', compact('data'));
    }

    // edit/update the book
    public function update_book(Request $request, $id){

        $data = Book::find($id);

        $data->title = $request->title;
        $data->author = $request->author;
        $data->description = $request->description;
        // $data->book_type = $request->book_type;
        $data->current_price = $request->current_price;
        $data->book_weight = $request->book_weight;
        $data->delivery_charges = $request->delivery_charges;
        $data->total_price = $request->total_price;

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('book', $imagename);

            $data->image = $imagename;

        }

        $data->save();

        return redirect::route('admin.view_book');
    }

    // order book shown
    public function orders(){

        $data = Order::all();

        return view('admin.orders', compact('data'));
    }
}
