<?php

namespace App\Repositories\Concrete;

use App\Enums\HttpStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Traits\RequestResponseTrait;
use App\Http\Requests\InstitutionAvailabilityRequest;
use App\Repositories\Abstraction\InstitutionRepositoryInterface;
use Carbon\Carbon;

class InstitutionRepository implements InstitutionRepositoryInterface
{
    use RequestResponseTrait;

    public function searchOrSave(InstitutionAvailabilityRequest $request){
        $institutions = [];
        $token = getInstitutionToken();

        $response = Http::accept('application/ld+json')
        ->withHeaders(['Authorization' => 'Bearer '. $token ])
        ->get( 
            getInstitutionAPI(), [ 'fullSearch' => $request->institution ] 
        );

        if ( $response->successful() ) {
            
            if ( count($response?->data) < 1 ) {

                $time = Carbon::now()->format('Y-m-d H:i:s');

                Http::accept('application/ld+json')
                ->withToken( $token )->post(
                    getInstitutionTicketAPI(), [ 
                    "project"=>"projects/2a9caad1-19c7-4340-949f-30b81a8a043e",  
                    "title"=>"missing Institution {$request->institution}",  
                    "description"=> "add Institution {$request->institution}",  
                    "createdAt" => $time,  
                    "updatedAt" => $time
                ]);
                return $this->respondWithSuccess([], HttpStatus::from(404)->message());
            }

            return $this->respondWithSuccess([ 'results' => count($response?->data) ], HttpStatus::from(200)->message());
        }

        $response->onError(fn() => $this->respondWithError([], "An Error Occurred") );
    }

}