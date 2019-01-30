<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 29/01/2019
 * Time: 3:51 PM
 */

namespace App\Repositories;


use App\Job;
use App\User;

class JobRepository
{
    private $model;

    public function __construct(Job $job)
    {
        $this->model  = $job;
    }

    public function all(){
        return $this->model->all();
    }

    public function jobsPostedByUser(User $user){
        return Job::where('posted_by', $user->id)->get();
    }

    public function createJob(){
        return auth()->user()->postedJobs()->create(\request(['title','description','offered_price_quote','location','direction_description','estimated_duration']));
    }

}
