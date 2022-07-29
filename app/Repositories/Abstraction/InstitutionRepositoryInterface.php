<?php

namespace App\Repositories\Abstraction;

use App\Http\Requests\InstitutionAvailabilityRequest;

interface InstitutionRepositoryInterface
{
  public function searchOrSave(InstitutionAvailabilityRequest $request);
}