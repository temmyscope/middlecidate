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

    /**
     * @param InstitutionAvailabilityRequest $request
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchOrSave(InstitutionAvailabilityRequest $request)
    {
        return $this->institutionRepository->searchOrSave($request);
    }
}
