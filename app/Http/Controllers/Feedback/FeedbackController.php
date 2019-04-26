<?php

namespace App\Http\Controllers\Feedback;

use App\Contracts\Constant;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Contracts\BaseService;
use App\Contracts\FeedbackService;
use App\Models\Feedback;

class FeedbackController extends BaseController
{
    /**
     * @var feedbackService
     */
    private $feedbackService;

    /**
     * FeedbackController constructor.
     * @param FeedbackService $feedbackService
     * @param BaseService $baseService
     */
    public function __construct(
        FeedbackService $feedbackService,
        BaseService $baseService
    )
    {
        parent::__construct($baseService);
        $this->feedbackService = $feedbackService;
    }

    /**
     * List All feedbacks
     */
    public function index()
    {
        $feedbacks = $this->feedbackService->listFeedbacks();
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Store feedback
     */
    public function store(Request $request)
    {
        $this->feedbackService->store($request);

        return response()->redirectToRoute('feedback.end');
    }

    public function view($id)
    {
        $feedback = $this->feedbackService->fetchFeedback($id);
        return view('feedback.view', compact('feedback'));
    }

    /**
     * Get feedback end page
     */
    public function end()
    {
        return view('feedback.end');
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->status = Constant::STATUS_INTEGER_DELETED;
        $feedback->save();
    }
}
