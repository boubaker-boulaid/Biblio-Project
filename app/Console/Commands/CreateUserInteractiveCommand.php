<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserInteractiveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new user ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Nom de l\'utilisateur ?');
        $email = $this->ask('Email ?');
        $password = $this->secret('Mot de passe ?');
        $confirm = $this->confirm('Créer cet utilisateur ?', true);
        if ($confirm) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
            $this->info('Utilisateur créé avec succès !');
        } else {
            $this->warn('Création annulée.');
        }
    }
}
