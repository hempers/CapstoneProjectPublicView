<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $primaryKey = 'ApplicationID';
    
    protected $fillable = [
        'ApplicantID',
        'ProvincialOfficeID',
        'EnteredByStaffID',
        'ApplicationTypeID',
        'ApplicationTitle',
        'CFIDPProgramCategory',
        'ImplementingAgencyID',
        'DateSubmitted',
        'Note',
        'LastUpdated',
        'GeneralStatus',
        'CurrentOwnerStaffID',
        'CurrentStage',
        'PreviousStage',
        'ValidationStatus',
        'IsSiteVisitRequired',
        'TransferStatus',
        'TransferredAt',
        'HasRequest'
    ];

    protected $casts = [
        'DateSubmitted' => 'date',
        'TransferredAt' => 'date',
        'LastUpdated' => 'datetime',
        'IsSiteVisitRequired' => 'boolean',
        'HasRequest' => 'boolean'
    ];
}
