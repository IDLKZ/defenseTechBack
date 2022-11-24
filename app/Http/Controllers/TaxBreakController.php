<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaxBreakRequest;
use App\Http\Requests\UpdateTaxBreakRequest;
use App\Repositories\TaxBreakRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TaxBreakController extends AppBaseController
{
    /** @var TaxBreakRepository $taxBreakRepository*/
    private $taxBreakRepository;

    public function __construct(TaxBreakRepository $taxBreakRepo)
    {
        $this->taxBreakRepository = $taxBreakRepo;
    }

    /**
     * Display a listing of the TaxBreak.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $taxBreaks = $this->taxBreakRepository->all();

        return view('tax_breaks.index')
            ->with('taxBreaks', $taxBreaks);
    }

    /**
     * Show the form for creating a new TaxBreak.
     *
     * @return Response
     */
    public function create()
    {
        return view('tax_breaks.create');
    }

    /**
     * Store a newly created TaxBreak in storage.
     *
     * @param CreateTaxBreakRequest $request
     *
     * @return Response
     */
    public function store(CreateTaxBreakRequest $request)
    {
        $input = $request->all();

        $taxBreak = $this->taxBreakRepository->create($input);
        $taxBreak->uploadFile($request["imageUrl"],"imageUrl","events");
        $taxBreak->uploadFile($request["thumbnail"],"thumbnail","events");
        Flash::success(__("validation.attributes.Created"));

        return redirect(route('taxBreaks.index'));
    }

    /**
     * Display the specified TaxBreak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taxBreak = $this->taxBreakRepository->find($id);

        if (empty($taxBreak)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('taxBreaks.index'));
        }

        return view('tax_breaks.show')->with('taxBreak', $taxBreak);
    }

    /**
     * Show the form for editing the specified TaxBreak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taxBreak = $this->taxBreakRepository->find($id);

        if (empty($taxBreak)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('taxBreaks.index'));
        }

        return view('tax_breaks.edit')->with('taxBreak', $taxBreak);
    }

    /**
     * Update the specified TaxBreak in storage.
     *
     * @param int $id
     * @param UpdateTaxBreakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaxBreakRequest $request)
    {
        $taxBreak = $this->taxBreakRepository->find($id);

        if (empty($taxBreak)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('taxBreaks.index'));
        }

        $taxBreak = $this->taxBreakRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $taxBreak->removeFile("imageUrl");
            $taxBreak->uploadFile($request["imageUrl"],"imageUrl","events");
        }
        if($request->hasFile("thumbnail")){
            $taxBreak->removeFile("thumbnail");
            $taxBreak->uploadFile($request["thumbnail"],"thumbnail","events");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('taxBreaks.index'));
    }

    /**
     * Remove the specified TaxBreak from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taxBreak = $this->taxBreakRepository->find($id);

        if (empty($taxBreak)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('taxBreaks.index'));
        }
        $taxBreak->removeFile("imageUrl");
        $taxBreak->removeFile("thumbnail");

        $this->taxBreakRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('taxBreaks.index'));
    }
}
