<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Repositories\ShopRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShopController extends AppBaseController
{
    /** @var ShopRepository $shopRepository*/
    private $shopRepository;

    public function __construct(ShopRepository $shopRepo)
    {
        $this->shopRepository = $shopRepo;
    }

    /**
     * Display a listing of the Shop.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shops = $this->shopRepository->all();

        return view('shops.index')
            ->with('shops', $shops);
    }

    /**
     * Show the form for creating a new Shop.
     *
     * @return Response
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created Shop in storage.
     *
     * @param CreateShopRequest $request
     *
     * @return Response
     */
    public function store(CreateShopRequest $request)
    {
        $input = $request->all();

        $shop = $this->shopRepository->create($input);
        if($request->hasFile("logo")){
            $shop->uploadFile($request["logo"],"logo","shops");
        }
        Flash::success(__("validation.attributes.Create"));

        return redirect(route('shops.index'));
    }

    /**
     * Display the specified Shop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('shops.index'));
        }

        return view('shops.show')->with('shop', $shop);
    }

    /**
     * Show the form for editing the specified Shop.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('shops.index'));
        }

        return view('shops.edit')->with('shop', $shop);
    }

    /**
     * Update the specified Shop in storage.
     *
     * @param int $id
     * @param UpdateShopRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShopRequest $request)
    {
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('shops.index'));
        }

        $shop = $this->shopRepository->update($request->all(), $id);
        if($request->hasFile("logo")){
            $shop->removeFile("logo");
            $shop->uploadFile($request["logo"],"logo","shops");
        }
        Flash::success(__("validation.attributes.Updated"));

        return redirect(route('shops.index'));
    }

    /**
     * Remove the specified Shop from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            Flash::error(__("validation.attributes.NotFound"));

            return redirect(route('shops.index'));
        }
        $shop->removeFile("logo");

        $this->shopRepository->delete($id);

        Flash::success(__("validation.attributes.Deleted"));

        return redirect(route('shops.index'));
    }
}
