<?php



namespace App\Http\Controllers\PublisherPanel;



use App\Models\Publisher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PublisherImport;
use Maatwebsite\Excel\Facades\Excel;



class PublisherController extends Controller
{
    public function index()
    {
        return view('publisher.dashboard');
    }

    public function create()
    {
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

        // Prepare data for saving
        $data = [
            'website_name' => $request->input('website_name'),
            'website_url' => $request->input('website_url'),
            'niches' => implode(',', $request->input('niches', [])),
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
            'link_type' => implode(',', $request->input('link_type', [])),
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
            'youtube_ad_cost' => $request->input('youtube_ad_cost'),
            'paypal_email' => $request->input('paypal_email'),
            'social_media_pages' => json_encode($request->input('social_media_pages', [])),
        ];

        // Store the validated data
        Publisher::create($data);

        // Set a success message in the session
        session()->flash('success', 'Your publisher details have been successfully captured! We will be in touch with you shortly');

        return redirect()->route('publisher.dashboard');
    }

    public function viewAll()
    {
        $publishers = Publisher::all(); // Fetch all publishers
        // In your controller

        return view('publisher.index', compact('publishers'));
    }

    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);
        return view('publisher.edit', compact('publisher'));
    }

    public function update(Request $request, $id)
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
            'link_insertion' => 'required|string',
            'link_insertion_amount' => 'nullable|numeric',
            'publishing_time' => 'required|in:24Hrs,48Hrs,72Hrs',
            'normal_post_cost' => 'required|numeric',
            'betting_casino_post_cost' => 'required|numeric',
            'crypto_forex_post_cost' => 'required|numeric',
            'cbd_post_cost' => 'required|numeric',
            'banner_cost' => 'required|numeric',
            'youtube_ad_cost' => 'required|numeric',
            'paypal_email' => 'required|email',
            'social_media_pages' => 'nullable|array',
            'social_media_pages.*' => 'nullable|url',
        ]);

        $publisher = Publisher::findOrFail($id);

        // Update fields
        $publisher->update([
            'website_name' => $request->input('website_name'),
            'website_url' => $request->input('website_url'),
            'niches' => implode(',', $request->input('niches', [])),
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
            'link_type' => implode(',', $request->input('link_type', [])),
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

            'youtube_ad_cost' => $request->input('youtube_ad_cost'),
            'paypal_email' => $request->input('paypal_email'),
            'social_media_pages' => json_encode($request->input('social_media_pages', [])),
        ]);

        // Set a success message in the session
        session()->flash('success', 'Publisher details updated successfully!');

        return redirect()->route('publisher.dashboard');
    }

    public function destroy($id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();

        // Set a success message in the session
        session()->flash('success', 'Publisher deleted successfully!');

        return redirect()->route('publisher.dashboard');
    }

      // Method to handle Excel data import
   public function importExcelData(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'import_file' => [
            'required',
            'file'
        ],
    ]);

    // Get the existing count of publishers
    $existingCount = Publisher::count();

    // Import data from Excel using the PublisherImport class
    Excel::import(new PublisherImport, $request->file('import_file'));

    // Get the updated count of publishers
    $newCount = Publisher::count();

    // Calculate the total number of publishers
    $totalCount = $newCount; // This will already include the new entries

    // Redirect back with a success message and counts
    return redirect()->back()->with('message', 'Data imported successfully! Total Publishers: ' . $totalCount);
}

    public function showImportForm()
    {
         $publishers = Publisher::paginate(10); // Fetch all publishers
        return view('publisher.import', compact('publishers'));
    }

    public function getFiltersData()
{
    $countries = Publisher::select('country')->distinct()->get();
    $minPrice = Publisher::min('price');
    $maxPrice = Publisher::max('price');

    return response()->json([
        'countries' => $countries,
        'minPrice' => $minPrice,
        'maxPrice' => $maxPrice,
    ]);
}

public function filterPublishers(Request $request)
{
    $query = Publisher::query();

    if ($request->country) {
        $query->where('country', $request->country);
    }

    if ($request->minPrice && $request->maxPrice) {
        $query->whereBetween('price', [$request->minPrice, $request->maxPrice]);
    }

    $publishers = $query->get();

    return view('publishers.partials.publisher_list', compact('publishers'));
}

}
