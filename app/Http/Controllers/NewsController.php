<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repositories\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NewsController extends AppBaseController
{
    /** @var NewsRepository $newsRepository*/
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $news = $this->newsRepository->paginate(12);

        return view('news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        $input = $request->all();

        $news = $this->newsRepository->create($input);
        $news->uploadFile($request["thumbnail"],"thumbnail","news");
        $news->uploadFile($request["imageUrl"],"imageUrl","news");
        Flash::success( __("validation.attributes.Created"));

        return redirect(route('news.index'));
    }

    /**
     * Display the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('news.index'));
        }

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('news.index'));
        }

        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified News in storage.
     *
     * @param int $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsRequest $request)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error(__("validation.attributes.NotFound"));
            return redirect(route('news.index'));
        }

        $news = $this->newsRepository->update($request->all(), $id);
        if($request->hasFile("thumbnail")){
            $news->removeFile("thumbnail");
            $news->uploadFile($request["thumbnail"],"thumbnail","news");
        }
        if($request->hasFile("imageUrl")){
            $news->removeFile("imageUrl");
            $news->uploadFile($request["imageUrl"],"imageUrl","news");
        }
        Flash::success( __("validation.attributes.Updated"));

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified News from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('news.index'));
        }
        $news->removeFile("thumbnail");
        $news->removeFile("imageUrl");

        $this->newsRepository->delete($id);

        Flash::success( __("validation.attributes.Deleted"));

        return redirect(route('news.index'));
    }
}
