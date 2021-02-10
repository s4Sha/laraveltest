<?php

namespace App\Domains\User\Jobs\FetchUsersJob;

use Lucid\Units\Job;

use App\Data\Repositories\Contracts\UserRepositoryInterface;

class FetchUsersJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepositoryInterface $user)
    {
        return $user->all();
        return $this->run(FetchUsersJob::class);
        //
    }
}
