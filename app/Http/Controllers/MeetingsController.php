<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View join-meeting
     */
    public function getJoinMeeting()
    {
        return view('join-meeting');
    }

    public function JoinToMeeting(Request $request, \GuzzleHttp\Client $client)
    {
        try {

            $response = $client->request('GET', 'meetings/'.$request->meeting_id);
            $response = (string) $response->getBody();
            $json = json_decode($response); 

            // Return To Meeting
            return redirect($json->join_url); 

        } catch (\Exception $e) {
            abort(403, "Meeting ".$request->meeting_id. " is not found or has expired."); // "Meeting Number is not found or has expired.";
        }
    }
}