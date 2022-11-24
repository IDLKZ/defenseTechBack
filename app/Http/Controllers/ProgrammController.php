<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgrammRequest;
use App\Http\Requests\UpdateProgrammRequest;
use App\Repositories\ProgrammRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProgrammController extends AppBaseController
{
    /** @var ProgrammRepository $programmRepository*/
    private $programmRepository;

    public function __construct(ProgrammRepository $programmRepo)
    {
        $this->programmRepository = $programmRepo;
    }

    /**
     * Display a listing of the Programm.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $programms = $this->programmRepository->all();

        return view('programms.index')
            ->with('programms', $programms);
    }

    /**
     * Show the form for creating a new Programm.
     *
     * @return Response
     */
    public function create()
    {
        return view('programms.create');
    }

    /**
     * Store a newly created Programm in storage.
     *
     * @param CreateProgrammRequest $request
     *
     * @return Response
     */
    public function store(CreateProgrammRequest $request)
    {
        $input = $request->all();

        $programm = $this->programmRepository->create($input);
        $programm->uploadFile($request["imageUrl"],"imageUrl","programms");
        $programm->uploadFile($request["thumbnail"],"thumbnail","programms");
        Flash::success(__("validation.attributes.Created"));

        return redirect(route('programms.index'));
    }

    /**
     * Display the specified Programm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programm = $this->programmRepository->find($id);

        if (empty($programm)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('programms.index'));
        }

        return view('programms.show')->with('programm', $programm);
    }

    /**
     * Show the form for editing the specified Programm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programm = $this->programmRepository->find($id);

        if (empty($programm)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('programms.index'));
        }

        return view('programms.edit')->with('programm', $programm);
    }

    /**
     * Update the specified Programm in storage.
     *
     * @param int $id
     * @param UpdateProgrammRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgrammRequest $request)
    {
        $programm = $this->programmRepository->find($id);

        if (empty($programm)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('programms.index'));
        }

        $programm = $this->programmRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $programm->removeFile("imageUrl");
            $programm->uploadFile($request["imageUrl"],"imageUrl","programms");
        }
        if($request->hasFile("thumbnail")){
            $programm->removeFile("thumbnail");
            $programm->uploadFile($request["thumbnail"],"thumbnail","programms");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('programms.index'));
    }

    /**
     * Remove the specified Programm from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programm = $this->programmRepository->find($id);

        if (empty($programm)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('programms.index'));
        }
        $programm->removeFile("imageUrl");
        $programm->removeFile("thumbnail");

        $this->programmRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('programms.index'));
    }
}
