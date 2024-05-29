<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],[
                'id'    => 17,
                'title' => 'dataInduk_access',
            ],
            [
                'id'    => 18,
                'title' => 'gurudantenagakependidikan_create',
            ],
            [
                'id'    => 19,
                'title' => 'gurudantenagakependidikan_edit',
            ],
            [
                'id'    => 20,
                'title' => 'gurudantenagakependidikan_show',
            ],
            [
                'id'    => 21,
                'title' => 'gurudantenagakependidikan_delete',
            ],
            [
                'id'    => 22,
                'title' => 'gurudantenagakependidikan_access',
            ],
            [
                'id'    => 23,
                'title' => 'jenisgtk_create',
            ],
            [
                'id'    => 24,
                'title' => 'jenisgtk_edit',
            ],
            [
                'id'    => 25,
                'title' => 'jenisgtk_show',
            ],
            [
                'id'    => 26,
                'title' => 'jenisgtk_delete',
            ],
            [
                'id'    => 27,
                'title' => 'jenisgtk_access',
            ],
            [
                'id'    => 28,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
