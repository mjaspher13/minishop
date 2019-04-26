<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface FeedbackService
{

    /** 
     *  Get all Feedbacks  
     *  @return json
     */
    public function listFeedbacks();

    /**
     * Store feedbacks
     * @param Request $request
     * 
     * @return mix
     */
    public function store(Request $request);

    /**
     * Fetch feedback
     */
    public function fetchFeedback($id);
    
}