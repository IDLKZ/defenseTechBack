<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAwardRequest;
use App\Http\Requests\UpdateAwardRequest;
use App\Repositories\AwardRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AwardController extends AppBaseController
{
    /** @var AwardRepository $awardRepository*/
    private $awardRepository;

    public function __construct(AwardRepository $awardRepo)
    {
        $this->awardRepository = $awardRepo;
    }

    /**
     * Display a listing of the Award.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $awards = $this->awardRepository->all();

        return view('awards.index')
            ->with('awards', $awards);
    }

    /**
     * Show the form for creating a new Award.
     *
     * @return Response
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created Award in storage.
     *
     * @param CreateAwardRequest $request
     *
     * @return Response
     */
    public function store(CreateAwardRequest $request)
    {
        $input = $request->all();

        $award = $this->awardRepository->create($input);
        if($request->hasFile("imageUrl")){
            $award->uploadFile($request["imageUrl"],"imageUrl","awards");
        }
        if($request->hasFile("thumbnail")){
            $award->uploadFile($request["thumbnail"],"thumbnail","awards");
        }
        Flash::success(__("validation.attributes.Created"));

        return redirect(route('awards.index'));
    }

    /**
     * Display the specified Award.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('awards.index'));
        }

        return view('awards.show')->with('award', $award);
    }

    /**
     * Show the form for editing the specified Award.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('awards.index'));
        }

        return view('awards.edit')->with('award', $award);
    }

    /**
     * Update the specified Award in storage.
     *
     * @param int $id
     * @param UpdateAwardRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAwardRequest $request)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('awards.index'));
        }

        $award = $this->awardRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $award->removeFile("imageUrl");
            $award->uploadFile($request["imageUrl"],"imageUrl","awards");
        }
        if($request->hasFile("thumbnail")){
            $award->removeFile("thumbnail");
            $award->uploadFile($request["thumbnail"],"thumbnail","awards");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('awards.index'));
    }

    /**
     * Remove the specified Award from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('awards.index'));
        }
        $award->removeFile("imageUrl");
        $award->removeFile("thumbnail");
        $this->awardRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('awards.index'));
    }
}
