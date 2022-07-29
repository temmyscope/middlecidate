<?php

namespace App\Repositories\Abstraction;

use App\Http\Requests\InstitutionAvailabilityRequest;
use Illuminate\Http\Request;

interface InstitutionRepositoryInterface
{
  public function searchOrSave(InstitutionAvailabilityRequest $request);
}