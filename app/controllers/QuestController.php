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
else if($any=='create')
{

return View::make('question_create')->with(array('title'=>'Post a Question','head'=>'Post Your Question here..!!!'));
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

public function ans_check($any)
{       

        



    		$details=Input::all();

        $answer=DB::table('questions')->where('qid',$details['qid'])->pluck('answer');
        $diff=DB::table('questions')->where('qid',$details['qid'])->pluck('difficulty');
        $uanswer=$details['answer'];
        
        if($answer==$uanswer)
        {	
         if($diff == "easy")
         	$pts=1;
         else if($diff == "moderate")
         	$pts=2;
         else if($diff == "difficult")
         	$pts=3;
        }
        else
        	{
        	  if($diff=="difficult")
        	$pts=-1;
               else if($diff=="moderate")
               	$pts=-2;
               else if($diff=="easy")
               	$pts=-3;
        }
        $uid=Auth::user()->id;
        $qid=$details['qid'];

        $filter=new Filter;
        $filter->qid=$qid;
        $filter->uid=$uid;
        $filter->points=$pts;
        $filter->uanswer=$uanswer;
        $filter->save();

        $score_b4=Auth::user()->score;
        $score_new=$score_b4+$pts;

        $option=   DB::table('questions')->where('qid',$details['qid'])->pluck('opt'.$answer);
                $quiz=   DB::table('questions')->where('qid',$details['qid'])->pluck('question');

        DB::table('users')->where('id',$uid)->update(array('score'=>$score_new));
    if($pts>0)
    {
    	DB::table('users')->where('id',$uid)->update(array('qid_answered'=>'You are right.You get '.$pts.'+'));
return Redirect::to('/questions/'.$any);
    }
    else
    {
    	DB::table('users')->where('id',$uid)->update(array('qid_answered'=>'Wrong Answer.You get -'.$pts.' <br /> Q :'.$quiz.'<br /> A : '.$answer.') '.$option));
return Redirect::to('/questions/'.$any);
    	}// return View::make('/questions/'.$any)->








}




	public function create()
	{
	
    		$details=Input::all();
         

		$validator = Validator::make(
 			    array(
        			'question' => $details['question'],
        			'opta' => $details['opta'],
        			'optb' => $details['optb'],
        			'optc'=>$details['optc'],
                    'optd'=>$details["optd"]
    				),
    			array(
        			'question' => 'required|min:4',
        			'opta' => 'required|min:4',
        			'optb' => 'required|min:4|',
        			'optc'=>'required|min:4',
        			 'optd'=>'required|min:4'
    				)
			);

		if($validator->fails() || $details['opta']==$details['optb'] || 
			$details['opta']==$details['optc'] || $details['opta']==$details['optd'] 
			|| $details['optb']==$details['optc'] || $details['optb']==$details['optd']
			|| $details['optc']==$details['optd'])
			{
				return View::make('question_create')->with(array('msg'=>"Check your form.Pls Note that the length of the text fields should be > 4", 'title'=>'Post a Question'
					,'head'=>'Post your question !!!'));
			}
 else
			{







         $question=new Question;
         $question->question=$details['question'];
         $question->opta=$details['opta'];

         $question->optb=$details['optb'];

         $question->optc=$details['optc'];

         $question->optd=$details['optd'];

         $question->answer=$details['answer'];
         $question->difficulty=$details['difficulty'];
         $question->category=$details['category'];
         $question->posted_by=Auth::user()->id;
         $question->save();
    
$filter=new Filter;
$filter->qid=DB::table('questions')->orderBy('qid','desc')->where('posted_by',Auth::user()->id)->take(1)->pluck('qid');
        $filter->uid=Auth::user()->id;
$filter->save();

    return Redirect::to('/home');
}
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
