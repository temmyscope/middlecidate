<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstitutionAvailabilityRequest;
use App\Repositories\Concrete\InstitutionRepository;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{

    public function __construct(
        protected InstitutionRepository $institutionRepository
    ){
    }

    //
    public function searchOrSave(InstitutionAvailabilityRequest $request)
    {
        return $this->institutionRepository->searchOrSave($request);
    }
}
