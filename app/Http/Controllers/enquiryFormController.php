<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\enquiryForm;

    class enquiryFormController extends Controller
    {
       
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
       public function enquiryFormPost(Request $request)
       {
           $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'product' => 'required',
            'message' => 'required'
            ]);
            $output = [$request->name, $request->email, $request->product, $request->message];
           return view('page.email', compact('output'));
       }
    }