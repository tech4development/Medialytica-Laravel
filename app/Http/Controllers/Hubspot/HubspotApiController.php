<?php

namespace App\Http\Controllers\Hubspot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HubspotApiController extends Controller
{
    public function create(Request $r)
    {
        // Prepare the data for HubSpot API
        $arr = [
            'properties' => [
                [
                    'property' => 'firstname',
                    'value' => $r->input('firstname')
                ],
                [
                    'property' => 'lastname',
                    'value' => $r->input('lastname')
                ],
                [
                    'property' => 'phone',
                    'value' => $r->input('phone')
                ],
                [
                    'property' => 'email',
                    'value' => $r->input('email')
                ],
            ]
        ];

        // Convert data to JSON
        $post_json = json_encode($arr);

        // HubSpot API endpoint with API key from .env file
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . env('HUBSPOT_API_KEY');
        
        // Create a new HTTP client instance
        $client = new Client();
        
        try {
            // Send the POST request to HubSpot
            $response = $client->request('POST', $endpoint, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $post_json,
            ]);

            // Return success message or handle the response
            if ($response->getStatusCode() == 200) {
                return response()->json(['message' => 'Contact Created Successfully!'], 200);
            } else {
                return response()->json(['message' => 'Failed to Create Contact.'], $response->getStatusCode());
            }
            
        } catch (GuzzleException $e) {
            // Catch and return errors
            return response()->json(['error' => 'HubSpot API request failed: ' . $e->getMessage()], 500);
        }
    }

    public function show(){

        return view ('pages.resources.contactus');
    }
}
