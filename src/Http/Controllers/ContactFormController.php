<?php

namespace Sontus\Contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sontus\Contactform\Models\ContactForm;
use Sontus\Contractform\Mail\InquiryMail;

class ContactFormController extends Controller
{
    public function index()
    {

    }

    /**
     * Display the form to create a new contact form submission.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        return view('contactform::contact-form.create');
    }

    /**
     * Store a new contact form submission.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required |max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required |max:255',
            'message' => 'required',
        ]);

        $contactform = new ContactForm();

        $contactform->name = $request->name;
        $contactform->email = $request->email;
        $contactform->subject = $request->subject;
        $contactform->message = $request->message;
        $contactform->save();

        $admin_email = config('contactform.admin_email');

        if($admin_email === null || $admin_email === '') {
            echo "Please set admin email in config/contactform.php";
        }
        else{
//            Mail::to($admin_email)->send(new InquiryMail( $contactform));
        }
        return redirect()->back()->with('success', 'Message sent successfully');

    }
}
