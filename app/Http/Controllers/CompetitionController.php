<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        // Get current year and next year
        $currentYear = date('Y');
        $nextYear = date('Y', strtotime('+1 year'));
        
        // Fetch competitions and group by year
        $currentYearCompetitions = Competition::whereYear('end_date', $currentYear)
            ->orderBy('start_date', 'desc')
            ->get();
            
        $nextYearCompetitions = Competition::whereYear('end_date', $nextYear)
            ->orderBy('start_date', 'desc')
            ->get();
            
        return view('modules.competition.competition', [
            'currentYearCompetitions' => $currentYearCompetitions,
            'nextYearCompetitions' => $nextYearCompetitions,
            'currentYear' => $currentYear,
            'nextYear' => $nextYear
        ]);
    }
    public function show($id)
    {
        $competition = Competition::with(['timelines', 'faqs', 'contacts'])
            ->findOrFail($id);
            
        return view('modules.competition.details_competition', compact('competition'));
    }
}