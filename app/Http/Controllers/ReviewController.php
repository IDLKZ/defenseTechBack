<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Repositories\ReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReviewController extends AppBaseController
{
    /** @var ReviewRepository $reviewRepository*/
    private $reviewRepository;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepository = $reviewRepo;
    }

    /**
     * Display a listing of the Review.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reviews = $this->reviewRepository->all();

        return view('reviews.index')
            ->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new Review.
     *
     * @return Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created Review in storage.
     *
     * @param CreateReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateReviewRequest $request)
    {
        $input = $request->all();

        $review = $this->reviewRepository->create($input);
        $review->uploadFile($request["imageUrl"],"imageUrl","reviews");
        $review->uploadFile($request["thumbnail"],"thumbnail","reviews");
        Flash::success(__("validation.attributes.Created"));

        return redirect(route('reviews.index'));
    }

    /**
     * Display the specified Review.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('reviews.index'));
        }

        return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified Review.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('reviews.index'));
        }

        return view('reviews.edit')->with('review', $review);
    }

    /**
     * Update the specified Review in storage.
     *
     * @param int $id
     * @param UpdateReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReviewRequest $request)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('reviews.index'));
        }

        $review = $this->reviewRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $review->removeFile("imageUrl");
            $review->uploadFile($request["imageUrl"],"imageUrl","reviews");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('reviews.index'));
    }

    /**
     * Remove the specified Review from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('reviews.index'));
        }
        $review->removeFile("imageUrl");

        $this->reviewRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('reviews.index'));
    }
}
