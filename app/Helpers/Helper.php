<?php

function getInstitutionToken(): string
{
  return env('INSTITUTION_API_TOKEN');
}

function getInstitutionTicketAPI(): string
{
  $endpoint = env('INSTITUTION_TICKET_API');
  if ( empty($endpoint) || is_null($endpoint) ) {
    throw new Exception("Missing Institurion Ticket API Endpoint");
  }
  return env('INSTITUTION_TICKET_API');
}

function getInstitutionAPI(): string
{
  $endpoint = env('INSTITUTION_API');
  if ( empty($endpoint) || is_null($endpoint) ) {
    throw new Exception("Missing Institurion Query API Endpoint");
  }
  return $endpoint;
}