<?php



namespace App\Http\Controllers\PublisherPanel;



use App\Models\Publisher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PublisherController extends Controller
{

    //
    public function index(){

        return view('publisher.dashboard');
    }

    //Function to create a publisher
      public function create(){

        return view('publisher.create');
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'website_name' => 'required|string|max:255',
            'website_url' => 'required|url',
            'niches' => 'required|array',
            'niches.*' => 'string',
            'moz_da' => 'required|integer',
            'ahref_dr' => 'required|integer',
            'traffic' => 'required|string',
            'geos' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'language' => 'required|string',
            'contact_person_name' => 'required|string',
            'contact_person_email' => 'required|email',
            'contact_person_phone' => 'required|string',
            'country' => 'required|string',
            'link_type' => 'required|array',
            'link_type.*' => 'string',
            'do_follow_links' => 'required|integer',
            'mark_paid_articles_as_sponsored' => 'required|boolean',
            'link_insertion' => 'required|in:yes,no',
            'link_insertion_amount' => 'nullable|numeric',
            'publishing_time' => 'required|in:24Hrs,48Hrs,72Hrs',
            'normal_post_cost' => 'required|numeric',
            'betting_casino_post_cost' => 'required|numeric',
            'crypto_forex_post_cost' => 'required|numeric',
            'cbd_post_cost' => 'required|numeric',
            'banner_cost' => 'required|numeric',
            'link_insertion_cost' => 'required|numeric',
            'youtube_ad_cost' => 'required|numeric',
            'paypal_email' => 'required|email',
            'social_media_pages' => 'nullable|array',
            'social_media_pages.facebook' => 'nullable|url',
            'social_media_pages.twitter' => 'nullable|url',
            'social_media_pages.tiktok' => 'nullable|url',
            'social_media_pages.youtube' => 'nullable|url',
            'social_media_pages.linkedin' => 'nullable|url',
            'social_media_pages.instagram' => 'nullable|url',
            'social_media_pages.telegram' => 'nullable|url',
        ]);

        $validatedData = [
            'website_name' => $request->input('website_name'),
            'website_url' => $request->input('website_url'),
            'niches' => implode(',', $request->input('niches', [])), // Convert array to comma-separated string
            'moz_da' => $request->input('moz_da'),
            'ahref_dr' => $request->input('ahref_dr'),
            'traffic' => $request->input('traffic'),
            'geos' => $request->input('geos'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'language' => $request->input('language'),
            'contact_person_name' => $request->input('contact_person_name'),
            'contact_person_email' => $request->input('contact_person_email'),
            'contact_person_phone' => $request->input('contact_person_phone'),
            'country' => $request->input('country'),
            'link_type' => implode(',', $request->input('link_type', [])), // Convert array to comma-separated string
            'do_follow_links' => $request->input('do_follow_links'),
            'mark_paid_articles_as_sponsored' => $request->input('mark_paid_articles_as_sponsored'),
            'link_insertion' => $request->input('link_insertion'),
            'link_insertion_amount' => $request->input('link_insertion_amount'),
            'publishing_time' => $request->input('publishing_time'),
            'normal_post_cost' => $request->input('normal_post_cost'),
            'betting_casino_post_cost' => $request->input('betting_casino_post_cost'),
            'crypto_forex_post_cost' => $request->input('crypto_forex_post_cost'),
            'cbd_post_cost' => $request->input('cbd_post_cost'),
            'banner_cost' => $request->input('banner_cost'),
            'link_insertion_cost' => $request->input('link_insertion_cost'),
            'youtube_ad_cost' => $request->input('youtube_ad_cost'),
            'paypal_email' => $request->input('paypal_email'),
            'social_media_pages' => json_encode($request->input('social_media_pages', [])), // Convert array to JSON string
        ];

        // Convert arrays to comma-separated strings
        // $validatedData['niches'] = implode(',', $validatedData['niches']);
        // $validatedData['link_type'] = implode(',', $validatedData['link_type']);

        // Convert social media pages to a JSON string if needed
        // $validatedData['social_media_pages'] = json_encode($validatedData['social_media_pages']);

        // Store the validated data
        Publisher::create($validatedData);

        // Set a success message in the session
        session()->put('success', 'Your publisher details have been successfully captured! We will be in touch with you shortly');



        return redirect()->route('publisher.dashboard');
    }

    //Show the form
    public function show(Publisher $publisher,$id)
    {
        // Find the publisher by ID or fail with 404 error if not found
        // $publisher = Publisher::findOrFail($id);

        // Convert comma-separated strings back to arrays (if needed)
        // $publisher->niches = explode(',', $publisher->niches);
        // $publisher->geos = explode(',', $publisher->geos);
        // $publisher->social_media_pages = explode(',', $publisher->social_media_pages);

        // Return the view with the publisher data
        return view('publisher.edit', compact($publisher));

    }



    //Edit functionality
    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);

        // dd($id);

        return view('publisher.edit', compact('publisher'));
    }



    //Update functionality
    public function update(Request $request, $id)
    {
        $request->validate([
            'website_name' => 'required|string|max:255',
            'website_url' => 'required|url',
            'niches' => 'required|array',
            'niches.*' => 'string',
            'moz_da' => 'required|integer',
            'ahref_dr' => 'required|integer',
            'traffic' => 'required|string',
            'geos' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'language' => 'required|string',
            'contact_person_name' => 'required|string',
            'contact_person_email' => 'required|email',
            'contact_person_phone' => 'required|string',
            'country' => 'required|string',
            'link_type' => 'required|array',
            'link_type.*' => 'string',
            'do_follow_links' => 'required|integer',
            'mark_paid_articles_as_sponsored' => 'required|boolean',
             'link_insertion' => 'required|string',
            'link_insertion_amount' => 'nullable|numeric',
            'publishing_time' => 'required|in:24Hrs,48Hrs,72Hrs',
            'normal_post_cost' => 'required|numeric',
            'betting_casino_post_cost' => 'required|numeric',
            'crypto_forex_post_cost' => 'required|numeric',
            'cbd_post_cost' => 'required|numeric',
            'banner_cost' => 'required|numeric',
            'link_insertion_cost' => 'required|numeric',
            'youtube_ad_cost' => 'required|numeric',
            'paypal_email' => 'required|email',
            'social_media_pages' => 'nullable|array',
            'social_media_pages.*' => 'nullable|url',
        ]);

        $publisher = Publisher::findOrFail($id);
        $publisher->website_name = $request->input('website_name');
        $publisher->website_url = $request->input('website_url');
        $publisher->niches = $request->input('niches');
        $publisher->moz_da = $request->input('moz_da');
        $publisher->ahref_dr = $request->input('ahref_dr');
        $publisher->traffic = $request->input('traffic');
        $publisher->geos = $request->input('geos');
        $publisher->phone_number = $request->input('phone_number');
        $publisher->email = $request->input('email');
        $publisher->language = $request->input('language');
        $publisher->contact_person_name = $request->input('contact_person_name');
        $publisher->contact_person_email = $request->input('contact_person_email');
        $publisher->contact_person_phone = $request->input('contact_person_phone');
        $publisher->country = $request->input('country');
        $publisher->link_type = $request->input('link_type');
        $publisher->do_follow_links = $request->input('do_follow_links');
        $publisher->mark_paid_articles_as_sponsored = $request->input('mark_paid_articles_as_sponsored');
        $publisher->link_insertion = $request->input('link_insertion');
        $publisher->link_insertion_amount= $request->input('link_insertion_amount');
        $publisher->publishing_time = $request->input('publishing_time');
        $publisher->normal_post_cost = $request->input('normal_post_cost');
        $publisher->betting_casino_post_cost = $request->input('betting_casino_post_cost');
        $publisher->crypto_forex_post_cost = $request->input('crypto_forex_post_cost');
        $publisher->cbd_post_cost = $request->input('cbd_post_cost');
        $publisher->banner_cost = $request->input('banner_cost');
        $publisher->link_insertion_cost = $request->input('link_insertion_cost');
        $publisher->youtube_ad_cost = $request->input('youtube_ad_cost');
        $publisher->paypal_email = $request->input('paypal_email');
        $publisher->social_media_pages = $request->input('social_media_pages');



        $publisher->save();

        return redirect()->route('publisher.edit', $id)->with('success', 'Publisher updated successfully!');
    }


}
