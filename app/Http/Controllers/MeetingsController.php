<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingsController extends Controller
{

    public function getJoinMeeting()
    {
        return view('join-meeting');
    }

    public function meetingsList(Request $request, \GuzzleHttp\Client $client)
    {
        \logger($request->all());
        try {
            $response = $client->request('GET', 'users/');
            // \logger($response);

            $response = (string) $response->getBody()->getContents();
            $json = json_decode($response); 

            $meetings = $client->request('GET', 'users/'.$json->users[0]->id.'/meetings');
            $meetings = (string) $meetings->getBody()->getContents();
            $listOfMeetings = json_decode($meetings); 


        return view('list-meetings-zoom')->with(['meetings' => $listOfMeetings->meetings]);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            \logger($e);
            abort(403, "Meeting is not found or has expired."); // "Meeting Number is not found or has expired.";
        }

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