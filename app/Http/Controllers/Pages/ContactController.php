<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactUs(){

        return view('pages.resources.contactus');
    }

    public function whoweAre(){

        return view('pages.resources.whoweare');
    }

       public function faqs(){

        return view('pages.resources.faqs');
    }


    public function whatweDo(){

        return view('pages.resources.whatwedo');
    }

    public function aboutUs(){

        return view('pages.resources.aboutus');
    }

    public function writeforMe(){

        return view('pages.resources.writeforme');
    }

    public function services(){

        return view('pages.resources.services');
    }

    public function niches(){

        return view('pages.resources.niches');
    }

    public function bannerAdvertising(){

        return view('pages.services.banneradvertising');
    }

    public function affiliateMarketing(){

        return view('pages.services.affiliatemarketing');
    }



    public function guestPosting(){

        return view('pages.services.guestposting');
    }

    public function linkInsertion(){

        return view('pages.services.linkinsertion');
    }


    public function sponsoredPosts(){

        return view('pages.services.sponsoredposts');
    }


    public function influencerMarketing(){

        return view('pages.services.influencermarketing');
    }


    public function outdoorAdvertising(){

        return view('pages.services.outdooradvertising');
    }


    public function socialPublishers(){

        return view('pages.services.socialpublishers');
    }



    public function tvAdvertising(){

        return view('pages.services.tvradioadvertising');
    }


    public function cpmCampaigns(){

        return view('pages.services.cpmadvertising');
    }


    public function digitalMarketing(){

        return view('pages.services.digitalmarketing');
    }


    /**
     * Store a newly created contact message in the database.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the contact message
        Contact::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect or respond with success
            return redirect()->route('contactus')->with('success', 'Your message has been sent successfully!');

    }



}
