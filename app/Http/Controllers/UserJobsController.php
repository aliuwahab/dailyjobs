<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use Illuminate\Http\Request;

class UserJobsController extends Controller
{
    public $job_repository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->job_repository = $jobRepository;
    }

    public function index(){
        $jobs = $this->job_repository->jobsPostedByUser(auth()->user());
        return view('dashboard.jobs.index', compact('jobs'));
    }


    public function store(){
        $this->job_repository->createJob();
        return redirect(route('user.posted.jobs', auth()->user()));
    }


}
