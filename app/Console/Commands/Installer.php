<?php

namespace App\Console\Commands;

use App\Models\Member;
use App\Models\Rol;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Installer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'marksDev:installer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command runs the initial project installer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        if ( !$this->verified()){
            $rol = $this->createRolSuperAdmin();
            $user = $this->createUserSuperAdmin();
            $user->roles()->attach($rol);
            $this->line('The role and user for super administrator was installed correctly');
            return 1;
        }else{
            $this->error('Cannot run the installer. There is already a role created');
            return 0;
        }
    }

    private function verified(){
        return Rol::find(1);
    }
    private function createRolSuperAdmin(){
        $rol = 'Super Admin';
        return Rol::create([
            'name' => $rol,
            'slug' => Str::slug( $rol, '-')
        ]);
    }

    private function createUserSuperAdmin(){
        return Member::create([
            'name' => 'Marks Admin',
            'email' => 'markuspiedra10@gmail.com',
            'password' => Hash::make('Marks_Dev-Blog@9855&43')
        ]);
    }
}
