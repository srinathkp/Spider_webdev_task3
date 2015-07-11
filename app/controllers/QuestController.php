<?php

class QuestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
  public function display($any)
  {
if($any=='all')
{
 // $questions=Question::all();
 $questions=DB::table('questions')
	                 ->whereNotIn('qid',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('question')->with(array('questions'=>$questions));
}

else if($any=='sports')
{
 // $questions=Question::all();
 $questions=DB::table('questions')
                     ->where('category','sports')
	                 ->whereNotIn('qid',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('question')->with(array('questions'=>$questions));
}

else if($any=='science')
{
 // $questions=Question::all();
 $questions=DB::table('questions')
                     ->where('category','science')
	                 ->whereNotIn('qid',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('question')->with(array('questions'=>$questions));
}

else if($any=='nature')

{
 // $questions=Question::all();
 $questions=DB::table('questions')
                     ->where('category','nature')
	                 ->whereNotIn('qid',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('question')->with(array('questions'=>$questions));
}

else if($any=='general')
{
 // $questions=Question::all();
 $questions=DB::table('questions')
                      ->where('category','general')
                       ->whereNotIn('qid',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('question')->with(array('questions'=>$questions));
}

else
{
	return Redirect::to('questions/all');
}



  }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
