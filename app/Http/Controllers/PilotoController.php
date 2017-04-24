<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePilotoRequest;
use App\Http\Requests\UpdatePilotoRequest;
use App\Repositories\PilotoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PilotoController extends AppBaseController
{
    /** @var  PilotoRepository */
    private $pilotoRepository;

    public function __construct(PilotoRepository $pilotoRepo)
    {
        $this->pilotoRepository = $pilotoRepo;
    }

    /**
     * Display a listing of the Piloto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pilotoRepository->pushCriteria(new RequestCriteria($request));
        $pilotos = $this->pilotoRepository->all();

        return view('pilotos.index')
            ->with('pilotos', $pilotos);
    }

    /**
     * Show the form for creating a new Piloto.
     *
     * @return Response
     */
    public function create()
    {
        return view('pilotos.create');
    }

    /**
     * Store a newly created Piloto in storage.
     *
     * @param CreatePilotoRequest $request
     *
     * @return Response
     */
    public function store(CreatePilotoRequest $request)
    {
        $input = $request->all();

        $piloto = $this->pilotoRepository->create($input);

        Flash::success('Piloto saved successfully.');

        return redirect(route('pilotos.index'));
    }

    /**
     * Display the specified Piloto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $piloto = $this->pilotoRepository->findWithoutFail($id);

        if (empty($piloto)) {
            Flash::error('Piloto not found');

            return redirect(route('pilotos.index'));
        }

        return view('pilotos.show')->with('piloto', $piloto);
    }

    /**
     * Show the form for editing the specified Piloto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $piloto = $this->pilotoRepository->findWithoutFail($id);

        if (empty($piloto)) {
            Flash::error('Piloto not found');

            return redirect(route('pilotos.index'));
        }

        return view('pilotos.edit')->with('piloto', $piloto);
    }

    /**
     * Update the specified Piloto in storage.
     *
     * @param  int              $id
     * @param UpdatePilotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePilotoRequest $request)
    {
        $piloto = $this->pilotoRepository->findWithoutFail($id);

        if (empty($piloto)) {
            Flash::error('Piloto not found');

            return redirect(route('pilotos.index'));
        }

        $piloto = $this->pilotoRepository->update($request->all(), $id);

        Flash::success('Piloto updated successfully.');

        return redirect(route('pilotos.index'));
    }

    /**
     * Remove the specified Piloto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $piloto = $this->pilotoRepository->findWithoutFail($id);

        if (empty($piloto)) {
            Flash::error('Piloto not found');

            return redirect(route('pilotos.index'));
        }

        $this->pilotoRepository->delete($id);

        Flash::success('Piloto deleted successfully.');

        return redirect(route('pilotos.index'));
    }
}
