<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ShowUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:show {id} {--field=name : the  feild to display}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show a user information';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $field = $this->option('field');

        $user = User::find($id);

        if (!$user) {
            $this->warn('No user found !');
            return;
        }

        $this->info("{$field} of the user {$id} : {$user->{$field}}");
    }
}
