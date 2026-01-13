<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

use function PHPUnit\Framework\isEmpty;

class ListUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:list';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Affiche la liste de tous les utilisateurs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        if($users->isEmpty())
        {
            $this->warn('No users found');
            return;
        }

        $this->info('Users List :');
        foreach($users as $user)
        {
            $this->line("ID : {$user->id} | Name : {$user->name} | Email : {$user->email} ");
        }
    }
}
