<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Connection
    |--------------------------------------------------------------------------
    |
    | You can set a different database connection for this package. It will set
    | new connection for models Role and Permission. When this option is null,
    | it will connect to the main database, which is set up in database.php
    |
    */

    'connection'            => env('ROLES_DATABASE_CONNECTION', null),
    'rolesTable'            => env('ROLES_ROLES_DATABASE_TABLE', 'roles'),
    'roleUserTable'         => env('ROLES_ROLE_USER_DATABASE_TABLE', 'role_user'),
    'permissionsTable'      => env('ROLES_PERMISSIONS_DATABASE_TABLE', 'permissions'),
    'permissionsRoleTable'  => env('ROLES_PERMISSION_ROLE_DATABASE_TABLE', 'permission_role'),
    'permissionsUserTable'  => env('ROLES_PERMISSION_USER_DATABASE_TABLE', 'permission_user'),

    /*
    |--------------------------------------------------------------------------
    | Slug Separator
    |--------------------------------------------------------------------------
    |
    | Here you can change the slug separator. This is very important in matter
    | of magic method __call() and also a `Slugable` trait. The default value
    | is a dot.
    |
    */

    'separator' => env('ROLES_DEFAULT_SEPARATOR', '.'),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | If you want, you can replace default models from this package by models
    | you created. Have a look at `jeremykenedy\LaravelRoles\App\Models\Role` model and
    | `jeremykenedy\LaravelRoles\App\Models\Permission` model.
    |
    */

    'models' => [
        'role'       => env('ROLES_DEFAULT_ROLE_MODEL', jeremykenedy\LaravelRoles\App\Models\Role::class),
        'permission' => env('ROLES_DEFAULT_PERMISSION_MODEL', jeremykenedy\LaravelRoles\App\Models\Permission::class),
    ],

    /*
    |--------------------------------------------------------------------------
    | Roles, Permissions and Allowed "Pretend"
    |--------------------------------------------------------------------------
    |
    | You can pretend or simulate package behavior no matter what is in your
    | database. It is really useful when you are testing you application.
    | Set up what will methods hasRole(), hasPermission() and allowed() return.
    |
    */

    'pretend' => [

        'enabled' => false,

        'options' => [
            'hasRole'       => true,
            'hasPermission' => true,
            'allowed'       => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Default User Model
    |--------------------------------------------------------------------------
    |
    | This is the applications default user model.
    |
    */

    'defaultUserModel' => env('ROLES_DEFAULT_USER_MODEL', config('auth.providers.users.model')),

    /*
    |--------------------------------------------------------------------------
    | Default Seeds
    |--------------------------------------------------------------------------
    |
    | These are the default package seeds. You can seed the package built
    | in seeds without having to seed them. These seed directly from
    | the package. These are not the published seeds.
    |
    */

    'defaultSeeds' => [
        'PermissionsTableSeeder'        => env('ROLES_SEED_DEFAULT_PERMISSIONS', true),
        'RolesTableSeeder'              => env('ROLES_SEED_DEFAULT_ROLES', true),
        'ConnectRelationshipsSeeder'    => env('ROLES_SEED_DEFAULT_RELATIONSHIPS', true),
        'UsersTableSeeder'              => env('ROLES_SEED_DEFAULT_USERS', false),
    ],
];
