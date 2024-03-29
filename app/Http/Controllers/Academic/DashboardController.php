<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Services\AcademicServices\AcademicService;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | protects only specific functions
    |--------------------------------------------------------------------------
    public function __construct(){
        $this->middleware('auth')->only(['functionName1', 'functionName2']);
    }
    */

    /*
    |--------------------------------------------------------------------------
    | protect all functions except specified ones
    |--------------------------------------------------------------------------
    public function __construct()
    {
        $this->middleware('auth')->except(['functionName1', 'functionName2']);
    }
    */
    
    public function dashboard(AcademicService $academicService){
        $this->authorize('authorizeAcademic', \App\Models\User::class); 
        return Inertia::render('Dashboard', $academicService->dashboardData());
    }

    public function pageOne(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageTwo(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageThree(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageFour(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageFive(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageSix(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }

    public function pageSeven(){
        $this->authorize('authorizeAcademic', \App\Models\User::class);
        return Inertia::render('Dashboard');
    }
}
