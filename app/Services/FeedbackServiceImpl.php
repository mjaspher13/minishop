<?php

namespace App\Services;

use App\contracts\Constant;
use App\Models\Feedback;
use App\Contracts\FeedbackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FeedbackServiceImpl implements FeedbackService
{
     /**
     * List all Feedbacks
     * @return \App\Models\Feedbacks
     */
    public function listFeedbacks()
    {
        return Feedback::where('status', '<>', Constant::STATUS_INTEGER_DELETED)->get();
    }


    /**
     * Store Feedback
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function store(Request $request)
    {
       return DB::transaction(function() use($request){
           Feedback::create([
                'name' => $request->get('name'),
                'mobile' => $request->get('mobile'),
                'email' => $request->get('email'),
                'message' => $request->get('message'),
            ]);
       }); 
    }

    /**
     * Fetch Feedback
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */

    public function fetchFeedback($id)
    {
        return Feedback::where('id', $id)->first();
    }
}
