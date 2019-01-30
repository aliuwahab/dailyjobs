<?php

namespace App\Http\Controllers;

use App\Job;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public $job_repository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->job_repository = $jobRepository;
    }

    public function index(){
        $jobs = $this->job_repository->all();
        return view('dashboard.jobs.index', compact('jobs'));
    }












}
