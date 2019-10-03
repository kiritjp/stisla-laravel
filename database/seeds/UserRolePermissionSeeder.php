<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* Super Admin seeder */
        $superAdminRole = Role::create(['name' => 'Super Admin']);
        $superAdminPermissions = ['create-super-admin', 'create-tila-admin', 'create-tila-va', 'create-tila-support', 'create-firm-admin','create-firm-user','create-client','modify-super-admin','modify-tila-admin','modify-tila-va','modify-tila-support','modify-firm-admin','modify-firm-user','modify-client','modify-own-profile','login-super-admin','login-tila-admin','login-tila-va','login-tila-support','login-firm-admin','login-firm-user','login-client','suspend-super-admin','suspend-tila-admin','suspend-tila-va','suspend-tila-support','suspend-firm-admin','suspend-firm-user','suspend-client','delete-super-admin','delete-tila-admin','delete-tila-va','delete-tila-support','delete-firm-admin','delete-firm-user','delete-client','create-case','modify-case','archive-case','delete-case','assign-case','be-assigned-case','change-case-status','upload-case-document','complete-questionnaire','view-firm-cases','view-own-cases','view-own-notifications','create-task','set-task-due-date','mark-task-complete','upgrade-selfmanaged-case-va'];
        foreach($superAdminPermissions as $sap)
        {
            $permission = Permission::create(['name' => $sap]);
            $superAdminRole->givePermissionTo($permission);
        }
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('1234')
        ]);
        $superAdminUser->assignRole($superAdminRole);

        /* TILA Admin seeder */
        $tilaAdminRole = Role::create(['name' => 'TILA Admin']);
        $tilaAdminPermissions = ['create-tila-admin', 'create-tila-va', 'create-tila-support', 'create-firm-admin','create-firm-user','create-client','modify-tila-va','modify-tila-support','modify-firm-admin','modify-firm-user','modify-client','modify-own-profile','login-tila-admin','login-tila-va','login-tila-support','login-firm-admin','login-firm-user','login-client','suspend-tila-admin','suspend-tila-va','suspend-tila-support','suspend-firm-admin','suspend-firm-user','suspend-client','delete-tila-admin','delete-tila-va','delete-tila-support','delete-firm-admin','delete-firm-user','delete-client','create-case','modify-case','archive-case','delete-case','assign-case','change-case-status','upload-case-document','complete-questionnaire','view-firm-cases','view-own-cases','view-own-notifications','create-task','set-task-due-date','mark-task-complete','upgrade-selfmanaged-case-va'];
        foreach($tilaAdminPermissions as $tap)
        {
            $permission = Permission::firstOrCreate(['name' => $tap]);
            $tilaAdminRole->givePermissionTo($permission);
        }
        $tilaAdminUser = User::create([
            'name' => 'TILA Admin',
            'email' => 'tilaadmin@example.com',
            'password' => Hash::make('1234')
        ]);
        $tilaAdminUser->assignRole($tilaAdminRole);

        /* TILA VA seeder */
        $tilaVARole = Role::create(['name' => 'TILA VA']);
        $tilaVAPermissions = ['modify-own-profile','modify-case','archive-case','assign-case','be-assigned-case','change-case-status','complete-questionnaire','view-own-cases','view-own-notifications','create-task','mark-task-complete'];
        foreach($tilaVAPermissions as $tvp)
        {
            $permission = Permission::firstOrCreate(['name' => $tvp]);
            $tilaVARole->givePermissionTo($permission);
        }
        $tilaVAUser = User::create([
            'name' => 'TILA VA',
            'email' => 'tilaVA@example.com',
            'password' => Hash::make('1234')
        ]);
        $tilaVAUser->assignRole($tilaVARole);

        /* TILA Support seeder */
        $tilaSupportRole = Role::create(['name' => 'TILA Support']);
        $tilaSupportPermissions = ['create-tila-va','create-firm-admin','create-firm-user','create-client','modify-firm-admin','modify-firm-user','modify-client','modify-own-profile','login-tila-va','login-firm-admin','login-firm-user','login-client','suspend-firm-admin','suspend-firm-user','suspend-client','delete-firm-admin','delete-firm-user','delete-client','create-case','modify-case','archive-case','delete-case','assign-case','change-case-status','upload-case-document','complete-questionnaire','view-firm-cases','view-own-cases','view-own-notifications','create-task','set-task-due-date','mark-task-complete','upgrade-selfmanaged-case-va'];
        foreach($tilaSupportPermissions as $tsp)
        {
            $permission = Permission::firstOrCreate(['name' => $tsp]);
            $tilaSupportRole->givePermissionTo($permission);
        }
        $tilaSupportUser = User::create([
            'name' => 'TILA Support',
            'email' => 'tilasupport@example.com',
            'password' => Hash::make('1234')
        ]);
        $tilaSupportUser->assignRole($tilaSupportRole);

        /* Firm admin seeder */
        $firmAdminRole = Role::create(['name' => 'Firm Admin']);
        $firmAdminPermissions = ['create-firm-user','create-client','modify-firm-user','modify-client','modify-own-profile','suspend-firm-user','suspend-client','delete-firm-user','create-case','modify-case','archive-case','assign-case','upload-case-document','complete-questionnaire','view-firm-cases','view-own-cases','view-own-notifications','create-task','set-task-due-date','mark-task-complete','upgrade-selfmanaged-case-va'];
        foreach($firmAdminPermissions as $fap)
        {
            $permission = Permission::firstOrCreate(['name' => $fap]);
            $firmAdminRole->givePermissionTo($permission);
        }
        $firmAdminUser = User::create([
            'name' => 'Firm Admin',
            'email' => 'firmadmin@example.com',
            'password' => Hash::make('1234')
        ]);
        $firmAdminUser->assignRole($firmAdminRole);

        /* Firm User seeder */
        $firmUserRole = Role::create(['name' => 'Firm User']);
        $firmUserPermissions = ['create-client','modify-client','modify-own-profile','suspend-client','create-case','modify-case','archive-case','upload-case-document','complete-questionnaire','view-firm-cases','view-own-cases','view-own-notifications','create-task','set-task-due-date','mark-task-complete','upgrade-selfmanaged-case-va'];
        foreach($firmUserPermissions as $fup)
        {
            $permission = Permission::firstOrCreate(['name' => $fup]);
            $firmUserRole->givePermissionTo($permission);
        }
        $firmUser = User::create([
            'name' => 'Firm User',
            'email' => 'firmuser@example.com',
            'password' => Hash::make('1234')
        ]);
        $firmUser->assignRole($firmUserRole);

        /* Client seeder */
        $clientRole = Role::create(['name' => 'Client']);
        $clientPermissions = ['modify-own-profile','upload-case-document','view-own-notifications'];
        foreach($clientPermissions as $cp)
        {
            $permission = Permission::firstOrCreate(['name' => $cp]);
            $clientRole->givePermissionTo($permission);
        }
        $clientUser = User::create([
            'name' => 'Client',
            'email' => 'client@example.com',
            'password' => Hash::make('1234')
        ]);
        $clientUser->assignRole($clientRole);
    }
}
