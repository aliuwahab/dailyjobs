<?php

namespace Tests\Feature;

use App\Job;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageJobListingTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function a_user_can_create_a_job_listing()
    {

        $user = $this->be(factory(User::class)->create());

        $attributes = [
            'title' => 'Title',
            'description' => 'Title',
            'offered_price_quote' => 230,
            'location' => 'Accra',
            'direction_description' => 'Accra',
            'estimated_duration' => 'Accra',
            'posted_by' => auth()->id()
        ];

        $user->post(route('store.job', $attributes))->assertRedirect(route('user.posted.jobs',auth()->user()));
        $this->assertDatabaseHas('jobs', $attributes);

    }


    /** @test */
    public function a_user_can_view_all_jobs_they_posted()
    {

        $this->withoutExceptionHandling();

        $this->be(factory(User::class)->create());

        factory(Job::class, 10)->create([
            'posted_by' => auth()->id()
        ]);

        factory(Job::class)->create([
            'posted_by' => auth()->id(),
            'title' => 'This is a job title'
        ]);

        $this->get(route('user.posted.jobs', auth()->user()))
                    ->assertViewIs('dashboard.jobs.index')
                    ->assertSee('This is a job title');


    }
}
