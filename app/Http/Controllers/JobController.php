<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = ['Web Developer', 'Software Engineer', 'UX Designer'];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show($id)
    {
        // For demonstration, we'll just return the job ID.
        return "Showing details for job ID: " . $id;
    }
    
    public function store(Request $request)
    {
        // Here you would typically validate the request and save the new job to the database.
        // For demonstration, we'll just return the submitted data.
        $title = $request->input('title');
        $description = $request->input('description');
        
        return "Job Created: " . htmlspecialchars($title) . " - " . htmlspecialchars($description);
    }

}
