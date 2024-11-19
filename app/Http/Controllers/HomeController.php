<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\ScPublisherFacebook;
use App\Models\ScPublisherInstagram;
use App\Models\ScPublisherTelegram;
use App\Models\ScPublisherTwitter;
use App\Models\WhatsappChannels;
use App\Models\ScPublisherYoutube;
use App\Models\ScPublisherTiktok;
use App\Models\Country;


class HomeController extends Controller
{
    public function index()

    {
        $publishers = Publisher::paginate(10);
        $facebookspublishers = ScPublisherFacebook::paginate(10);
        $instagramspublishers = ScPublisherInstagram::paginate(10);
        $xspublishers = ScPublisherTwitter::paginate(10);
        $tiktokspublishers = ScPublisherTiktok::paginate(10);
        $telegramspublishers = ScPublisherTelegram::paginate(10); // Adjust as necessary
        $whatsappspublishers = WhatsappChannels::paginate(10);
        $youtubespublishers = ScPublisherYoutube::paginate(10);
        $countries = Country::all();


        return view('home', compact('countries','publishers', 'facebookspublishers', 'instagramspublishers', 'xspublishers', 'tiktokspublishers', 'telegramspublishers', 'whatsappspublishers', 'youtubespublishers'));
    }


    public function show()
{
    $countries = [
        'Africa' => [
            ['name' => 'Nigeria', 'flag' => '🇳🇬'],
            ['name' => 'South Africa', 'flag' => '🇿🇦'],
            ['name' => 'Egypt', 'flag' => '🇪🇬'],
            ['name' => 'Kenya', 'flag' => '🇰🇪'],
            ['name' => 'Ghana', 'flag' => '🇬🇭'],
            ['name' => 'Morocco', 'flag' => '🇲🇦'],
            ['name' => 'Ethiopia', 'flag' => '🇪🇹'],
            ['name' => 'Tanzania', 'flag' => '🇹🇿'],
            ['name' => 'Uganda', 'flag' => '🇺🇬'],
            ['name' => 'Algeria', 'flag' => '🇩🇿'],
        ],
        'Europe' => [
            ['name' => 'United Kingdom', 'flag' => '🇬🇧'],
            ['name' => 'Germany', 'flag' => '🇩🇪'],
            ['name' => 'France', 'flag' => '🇫🇷'],
            ['name' => 'Italy', 'flag' => '🇮🇹'],
            ['name' => 'Spain', 'flag' => '🇪🇸'],
            ['name' => 'Netherlands', 'flag' => '🇳🇱'],
            ['name' => 'Belgium', 'flag' => '🇧🇪'],
            ['name' => 'Sweden', 'flag' => '🇸🇪'],
            ['name' => 'Norway', 'flag' => '🇳🇴'],
            ['name' => 'Switzerland', 'flag' => '🇨🇭'],
        ],
        'Asia' => [
            ['name' => 'India', 'flag' => '🇮🇳'],
            ['name' => 'China', 'flag' => '🇨🇳'],
            ['name' => 'Japan', 'flag' => '🇯🇵'],
            ['name' => 'South Korea', 'flag' => '🇰🇷'],
            ['name' => 'Thailand', 'flag' => '🇹🇭'],
            ['name' => 'Vietnam', 'flag' => '🇻🇳'],
            ['name' => 'Singapore', 'flag' => '🇸🇬'],
            ['name' => 'Malaysia', 'flag' => '🇲🇾'],
            ['name' => 'Indonesia', 'flag' => '🇮🇩'],
            ['name' => 'Philippines', 'flag' => '🇵🇭'],
        ],
        'North America' => [
            ['name' => 'United States', 'flag' => '🇺🇸'],
            ['name' => 'Canada', 'flag' => '🇨🇦'],
            ['name' => 'Mexico', 'flag' => '🇲🇽'],
            ['name' => 'Guatemala', 'flag' => '🇵🇪'],
            ['name' => 'Cuba', 'flag' => '🇨🇺'],
            ['name' => 'Honduras', 'flag' => '🇭🇳'],
            ['name' => 'Costa Rica', 'flag' => '🇨🇷'],
            ['name' => 'Panama', 'flag' => '🇵🇦'],
            ['name' => 'Dominican Republic', 'flag' => '🇩🇴'],
            ['name' => 'Jamaica', 'flag' => '🇯🇲'],
        ],
        'South America' => [
            ['name' => 'Brazil', 'flag' => '🇧🇷'],
            ['name' => 'Argentina', 'flag' => '🇦🇷'],
            ['name' => 'Chile', 'flag' => '🇨🇱'],
            ['name' => 'Peru', 'flag' => '🇵🇪'],
            ['name' => 'Colombia', 'flag' => '🇨🇴'],
            ['name' => 'Ecuador', 'flag' => '🇪🇨'],
            ['name' => 'Bolivia', 'flag' => '🇧🇴'],
            ['name' => 'Paraguay', 'flag' => '🇵🇾'],
            ['name' => 'Uruguay', 'flag' => '🇺🇾'],
            ['name' => 'Suriname', 'flag' => '🇸🇷'],
        ],
        'Oceania' => [
            ['name' => 'Australia', 'flag' => '🇦🇺'],
            ['name' => 'New Zealand', 'flag' => '🇳🇿'],
            ['name' => 'Fiji', 'flag' => '🇫🇯'],
            ['name' => 'Papua New Guinea', 'flag' => '🇵🇬'],
            ['name' => 'Samoa', 'flag' => '🇼🇸'],
            ['name' => 'Tonga', 'flag' => '🇹🇴'],
            ['name' => 'Vanuatu', 'flag' => '🇻🇺'],
            ['name' => 'Solomon Islands', 'flag' => '🇸🇧'],
            ['name' => 'Kiribati', 'flag' => '🇰🇮'],
            ['name' => 'Tuvalu', 'flag' => '🇹🇻'],
        ],
        'Antarctica' => [
            // Antarctica has no countries, only territories
            ['name' => 'No countries', 'flag' => '❄️']
        ],
    ];

    return view('advertisers.countries.index', compact('countries'));
}




}
