<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\essay_writing;
use App\Models\Order;
use App\Models\Submission;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // all book display
    public function book_display(){

        $data = Book::all();

        return view('home.book_display', compact('data'));
    }


    // book detail function
    public function book_detail($id){

        $data = Book::find($id);

        return view('home.book_detail', compact('data'));
    }

    // order book
    public function order_book(Request $request, $id){

        $data = new Order;

        // dd($request->book_type);

        $data->book_id = $id;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        // $data->book_type = $request->input('book_type');
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Your Order has been placed, Successfully!!');
    }

    //competition
    public function competition(){

        return view('home.competition');
    }

    // contact page
    public function contact(){
        return view('home.contact');
    }

    // sameer work

    // public function date()
    // {
    //     $currentDate = now();
    //     $weekLaterDate = $currentDate->addWeek();
    //     $formattedDate = $weekLaterDate->format('d-M-Y');
    //     return view('home.content', ['formattedDate' => $formattedDate]);
    // }

    public function showSubmissionForm()
    {
        return view('home.submission');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'document' => 'required|mimes:pdf,doc,docx|max:10240',
            'comment' => 'required|max:500',
        ]);

        $input = $request->all();

        if ($document = $request->file('document')) {
            $destinationPath = 'documents/';
            $documentName = date('Ymd') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $documentName);
            $input['document'] = $documentName;
        }

        Submission::create($input);

        return redirect('/submission')->with('message', 'Document submitted successfully!');
    }


    // abdullah work
    // essay writing competition
    public function essay_writing(){
        return view('home.essay_writing');
    }

    public function your_essay_submission(Request $request){

        $data = new essay_writing;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->your_essay = $request->your_essay;

        $data->save();

        return redirect()->back()->with('message', 'Thanks for enrolling in Competition, We will get back you Soon..');

    }

}
