<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'dataInduk' => [
        'title'          => 'Data Induk',
        'title_singular' => 'Data Induk',
    ],
    'gurudantenagakependidikan' => [
        'title'          => 'Guru dan Tenaga Kependidikan',
        'title_singular' => 'GTK',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'image'              => 'Foto Profile',
            'image_helper'       => ' ',
            'fullname'           => 'Nama Lengkap',
            'fullname_helper'    => ' ',
            'gender'             => 'Gender',
            'gender_helper'      => ' ',
            'jenisgtk'           => 'Jenis GTK',
            'jenisgtk_helper'    => ' ',
            'hiredate'           => 'Tanggal Perekrutan',
            'hiredate_helper'    => ' ',
            'dateofbirth'        => 'Tanggal Lahir',
            'dateofbirth_helper' => ' ',
            'address'            => 'Alamat',
            'address_helper'     => ' ',
            'phone'              => 'Nomor Kontak',
            'phone_helper'       => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];
