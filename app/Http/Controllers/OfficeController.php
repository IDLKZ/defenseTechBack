<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;
use App\Repositories\OfficeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OfficeController extends AppBaseController
{
    /** @var OfficeRepository $officeRepository*/
    private $officeRepository;

    public function __construct(OfficeRepository $officeRepo)
    {
        $this->officeRepository = $officeRepo;
    }

    /**
     * Display a listing of the Office.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $offices = $this->officeRepository->all();

        return view('offices.index')
            ->with('offices', $offices);
    }

    /**
     * Show the form for creating a new Office.
     *
     * @return Response
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created Office in storage.
     *
     * @param CreateOfficeRequest $request
     *
     * @return Response
     */
    public function store(CreateOfficeRequest $request)
    {
        $input = $request->all();

        $office = $this->officeRepository->create($input);
        $office->uploadFile($request["imageUrl"],"imageUrl","offices");
        $office->uploadFile($request["thumbnail"],"thumbnail","offices");

        Flash::success(__("validation.attributes.Created"));

        return redirect(route('offices.index'));
    }

    /**
     * Display the specified Office.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $office = $this->officeRepository->find($id);

        if (empty($office)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('offices.index'));
        }

        return view('offices.show')->with('office', $office);
    }

    /**
     * Show the form for editing the specified Office.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $office = $this->officeRepository->find($id);

        if (empty($office)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('offices.index'));
        }

        return view('offices.edit')->with('office', $office);
    }

    /**
     * Update the specified Office in storage.
     *
     * @param int $id
     * @param UpdateOfficeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfficeRequest $request)
    {
        $office = $this->officeRepository->find($id);

        if (empty($office)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('offices.index'));
        }

        $office = $this->officeRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $office->removeFile("imageUrl");
            $office->uploadFile($request["imageUrl"],"imageUrl","offices");
        }
        if($request->hasFile("thumbnail")){
            $office->removeFile("thumbnail");
            $office->uploadFile($request["thumbnail"],"thumbnail","offices");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('offices.index'));
    }

    /**
     * Remove the specified Office from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $office = $this->officeRepository->find($id);

        if (empty($office)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('offices.index'));
        }
        $office->removeFile("imageUrl");
        $office->removeFile("thumbnail");
        $this->officeRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('offices.index'));
    }
}
