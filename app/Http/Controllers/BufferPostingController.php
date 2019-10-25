<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
use Bulkly\SocialPostGroups;
class BufferPostingController extends Controller
{
    //
    public function history(Request $request)
    {
    	if(isset($request['name']))
    	{
    		$name = $request['name'];
    		$socialpostgroups = SocialPostGroups::where('name','LIKE',"%{$name}%")->simplePaginate(10);
    		$bufferPostings = $socialpostgroups->posts;
    	}
    	$groups = SocialPostGroups::all();
    	$bufferPostings = BufferPosting::simplePaginate(10);

    	return view('pages.history', compact('bufferPostings', 'groups'));
    }
}
