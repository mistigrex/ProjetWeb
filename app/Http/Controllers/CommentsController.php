<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\User;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'text' => 'required',
            'comment_image|nullable|max:1999',
            'Activity_id' => 'required',
            'user_id' => 'required'

        ]);
        if ($request->hasFile('comment_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('comment_image')->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('comment_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('comment_image')->storeAs('public/comment_image', $fileNameToStore);
        }
        else {
            $fileNameToStore = null;
        }
        $comment = new Comment;
        $comment->text = $request->input('text');
        $comment->comment_image = $fileNameToStore;
        $comment->user_id = $request->input('user_id');
        $comment->Activity_id = $request->input('Activity_id');
        $comment->save();

        return redirect('/manifestations')->with('success', 'Commentaire posté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
