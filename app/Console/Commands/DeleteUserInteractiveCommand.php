<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUserInteractiveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a user interactive way';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::pluck('name', 'id')->toArray();
        if (empty($users)) {
            $this->warn('Aucun utilisateur à supprimer.');
            return;
        }
        $userId = $this->choice(
            'Quel utilisateur souhaitez-vous supprimer ?',
            array_values($users),
            0
        );
        $selectedId = array_search($userId, $users);
        if ($this->confirm("Supprimer {$userId} (ID: {$selectedId}) ?")) {
            User::destroy($selectedId);
            $this->info('Utilisateur supprimé !');
        } else {
            $this->warn('Suppression annulée.');
        }
    }
}
