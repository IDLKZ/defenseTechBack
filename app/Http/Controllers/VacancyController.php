<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Repositories\VacancyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VacancyController extends AppBaseController
{
    /** @var VacancyRepository $vacancyRepository*/
    private $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepo)
    {
        $this->vacancyRepository = $vacancyRepo;
    }

    /**
     * Display a listing of the Vacancy.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vacancies = $this->vacancyRepository->all();

        return view('vacancies.index')
            ->with('vacancies', $vacancies);
    }

    /**
     * Show the form for creating a new Vacancy.
     *
     * @return Response
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Store a newly created Vacancy in storage.
     *
     * @param CreateVacancyRequest $request
     *
     * @return Response
     */
    public function store(CreateVacancyRequest $request)
    {
        $input = $request->all();

        $vacancy = $this->vacancyRepository->create($input);

        Flash::success(__("validation.attributes.Created"));

        return redirect(route('vacancies.index'));
    }

    /**
     * Display the specified Vacancy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vacancy = $this->vacancyRepository->find($id);

        if (empty($vacancy)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('vacancies.index'));
        }

        return view('vacancies.show')->with('vacancy', $vacancy);
    }

    /**
     * Show the form for editing the specified Vacancy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vacancy = $this->vacancyRepository->find($id);

        if (empty($vacancy)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('vacancies.index'));
        }

        return view('vacancies.edit')->with('vacancy', $vacancy);
    }

    /**
     * Update the specified Vacancy in storage.
     *
     * @param int $id
     * @param UpdateVacancyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVacancyRequest $request)
    {
        $vacancy = $this->vacancyRepository->find($id);

        if (empty($vacancy)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('vacancies.index'));
        }

        $vacancy = $this->vacancyRepository->update($request->all(), $id);

        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('vacancies.index'));
    }

    /**
     * Remove the specified Vacancy from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vacancy = $this->vacancyRepository->find($id);

        if (empty($vacancy)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('vacancies.index'));
        }

        $this->vacancyRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('vacancies.index'));
    }
}
