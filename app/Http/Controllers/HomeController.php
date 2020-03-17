<?php

namespace App\Http\Controllers;

use App\students;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }
    public function view()
    {
        $students = students::all();
        return view('view', compact('students'));
    }
    public function store(Request $request)
    {
        $this->validate($request, ['fullname' => 'required', 'email' => 'required', 'password' => 'required']);
        $student  = new students;
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        return redirect(route('view'))->with('successmsg', 'student successfully added');
    }

    public function edit($id)
    {

        $students = students::find($id);
        return view('edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['fullname' => 'required', 'email' => 'required', 'password' => 'required']);
        $student  = students::find($id);
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        return redirect(route('view'))->with('successmsg', 'student successfully added');
    }

    public function delete($id)
    {
        students::find($id)->delete();
        return redirect(route('view'))->with('successmsg', 'student successfully added');
    }
}