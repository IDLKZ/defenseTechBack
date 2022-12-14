<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Repositories\AnnouncementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AnnouncementController extends AppBaseController
{
    /** @var AnnouncementRepository $announcementRepository*/
    private $announcementRepository;

    public function __construct(AnnouncementRepository $announcementRepo)
    {
        $this->announcementRepository = $announcementRepo;
    }

    /**
     * Display a listing of the Announcement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $announcements = $this->announcementRepository->paginate(12);

        return view('announcements.index')
            ->with('announcements', $announcements);
    }

    /**
     * Show the form for creating a new Announcement.
     *
     * @return Response
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created Announcement in storage.
     *
     * @param CreateAnnouncementRequest $request
     *
     * @return Response
     */
    public function store(CreateAnnouncementRequest $request)
    {
        $input = $request->all();

        $announcement = $this->announcementRepository->create($input);
        $announcement->uploadFile($input["imageUrl"],"imageUrl","announcements");
        Flash::success(__("validation.attributes.Created"));

        return redirect(route('announcements.index'));
    }

    /**
     * Display the specified Announcement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $announcement = $this->announcementRepository->find($id);

        if (empty($announcement)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('announcements.index'));
        }

        return view('announcements.show')->with('announcement', $announcement);
    }

    /**
     * Show the form for editing the specified Announcement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $announcement = $this->announcementRepository->find($id);

        if (empty($announcement)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('announcements.index'));
        }

        return view('announcements.edit')->with('announcement', $announcement);
    }

    /**
     * Update the specified Announcement in storage.
     *
     * @param int $id
     * @param UpdateAnnouncementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnnouncementRequest $request)
    {
        $announcement = $this->announcementRepository->find($id);

        if (empty($announcement)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('announcements.index'));
        }

        $announcement = $this->announcementRepository->update($request->all(), $id);
        if($request->hasFile("imageUrl")){
            $announcement->removeFile("imageUrl");
            $announcement->uploadFile($request["imageUrl"],"imageUrl","announcements");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('announcements.index'));
    }

    /**
     * Remove the specified Announcement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $announcement = $this->announcementRepository->find($id);

        if (empty($announcement)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('announcements.index'));
        }
        $announcement->removeFile("imageUrl");
        $this->announcementRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('announcements.index'));
    }
}
