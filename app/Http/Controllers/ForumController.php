<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ForumController extends Controller
{
    public function index()
    {
        $UnderTopics = DB::table('undertopics')->get();
        $allSolutions=[];
        $allProjects =[];
        $allEvents = [];
        $allDiscussions = [];
        foreach($UnderTopics as $topic)
        {
            if($topic->categoryId == 1)
                array_push($allSolutions,$topic);
            else if($topic->categoryId == 2)
                array_push($allProjects,$topic);
            else if($topic->categoryId == 3)
                array_push($allEvents,$topic);
            else if($topic->categoryId == 4)
                array_push($allDiscussions,$topic);
        }
        return view('forum',[
            'solutions'=>$allSolutions,
            'projects'=>$allProjects,
            'events' => $allEvents,
            'discussions' => $allDiscussions
        ]);
    }
    public function solution($unTopicId)
    {
        $UnderTopic = DB::table('undertopics')->get();
        $currentTopic = null;
        foreach($UnderTopic as $item)
        {
            if($item->id == $unTopicId)
                $currentTopic = $item;
        }
        $Discussions = DB::table('discussion')->get();
        $allMessages = [];
        foreach($Discussions as $discussion)
        {
            if($discussion->underTopicId == $unTopicId)
                array_push($allMessages,$discussion);



        }
        return view('currentDiscussion',[
            'currentTopic' => $currentTopic,
            'allMessages' => $allMessages,
            'TopicId' => $unTopicId
        ]);
    }
    public function project($unTopicId)
    {
        $project = DB::table('undertopics')->get();
        $currentTopic = null;
        foreach($project as $item)
        {
            if($item->id == $unTopicId)
                $currentTopic = $item;
        }
        $Discussions = DB::table('discussion')->get();
        $allMessages = [];
        foreach($Discussions as $discussion)
        {
            if($discussion->underTopicId == $unTopicId)
                array_push($allMessages,$discussion);



        }
        return view('currentDiscussion',[
            'currentTopic' => $currentTopic,
            'allMessages' => $allMessages,
            'TopicId' => $unTopicId
        ]);
    }
    public function event($unTopicId)
    {
        $event = DB::table('undertopics')->get();
        $currentTopic = null;
        foreach($event as $item)
        {
            if($item->id == $unTopicId)
                $currentTopic = $item;
        }
        $Discussions = DB::table('discussion')->get();
        $allMessages = [];
        foreach($Discussions as $discussion)
        {
            if($discussion->underTopicId == $unTopicId)
                array_push($allMessages,$discussion);



        }
        return view('currentDiscussion',[
            'currentTopic' => $currentTopic,
            'allMessages' => $allMessages,
            'TopicId' => $unTopicId
        ]);
    }
    public function discusion($unTopicId)
    {
        $discussion = DB::table('undertopics')->get();
        $currentTopic = null;
        foreach($discussion as $item)
        {
            if($item->id == $unTopicId)
                $currentTopic = $item;
        }
        $Discussions = DB::table('discussion')->get();
        $allMessages = [];
        foreach($Discussions as $discussion)
        {
            if($discussion->underTopicId == $unTopicId)
                array_push($allMessages,$discussion);



        }
        return view('currentDiscussion',[
            'currentTopic' => $currentTopic,
            'allMessages' => $allMessages,
            'TopicId' => $unTopicId
        ]);
    }
    public function createNewTopic()
    {
        return view('createNewTopic');
    }
}
