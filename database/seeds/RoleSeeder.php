<?php

use Illuminate\Database\Seeder;
use \Kodeine\Acl\Models\Eloquent\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->create([
            'name' => 'Banco',
            'slug' => 'banco',
            'description' => ''
        ]);

        $role = new Role();
        $role->create([
            'name' => 'Integrador',
            'slug' => 'integrador',
            'description' => ''
        ]);

        $role = new Role();
        $role->create([
            'name' => 'Cliente',
            'slug' => 'cliente',
            'description' => ''
        ]);

    }
}
