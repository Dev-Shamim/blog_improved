<?php
return [
    'folders' => [
        'app/Http/Controllers/Admin',
        'app/Http/Controllers/Auth',
        'app/Http/Controllers/Frontend',
        'app/Http/Requests',
        'app/Models',
        'app/Policies',
        'app/Providers',
        'database/factories',
        'database/seeders',
        'resources/views/admin/blog',
        'resources/views/admin/category',
        'resources/views/admin/post',
        'resources/views/admin/profile',
        'resources/views/auth',
        'resources/views/components/frontend',
        'resources/views/frontend/about',
        'resources/views/frontend/category',
        'resources/views/frontend/contact',
        'resources/views/frontend/home',
        'resources/views/frontend/post',
        'resources/views/frontend/profile',
        'resources/views/layouts/admin/partials',
        'resources/views/layouts/frontend/partials',
    ],

    'resources' => [
        'controllers' => [
            ['name'=> 'CategoryController.php', 'path'=> 'app/Http/Controllers/Admin', 'type'=> 'controller', 'route' => true],
            ['name'=> 'DashboardController.php', 'path'=> 'app/Http/Controllers/Admin', 'type'=> 'controller', 'route' => true],
            ['name'=> 'PostController.php', 'path'=> 'app/Http/Controllers/Admin', 'type'=> 'controller', 'route' => true],
            ['name'=> 'ProfileController.php', 'path'=> 'app/Http/Controllers/Admin', 'type'=> 'controller', 'route' => true],
            ['name'=> 'LoginController.php', 'path'=> 'app/Http/Controllers/Auth', 'type'=> 'controller', 'route' => true],
            ['name'=> 'RegisterController.php', 'path'=> 'app/Http/Controllers/Auth', 'type'=> 'controller', 'route' => true],
            ['name'=> 'AboutController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
            ['name'=> 'CategoryController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
            ['name'=> 'ContactController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
            ['name'=> 'HomeController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
            ['name'=> 'PostController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
            ['name'=> 'ProfileController.php', 'path'=> 'app/Http/Controllers/Frontend', 'type'=> 'controller', 'route' => true],
        ],

        'models' => [
            ['name' => 'Category.php', 'path' => 'app/Models', 'type' => 'model', 'migration' => true, 'factory' => true, 'seeder' => true],
            ['name' => 'Post.php', 'path' => 'app/Models', 'type' => 'model', 'migration' => true, 'factory' => true, 'seeder' => true],
            ['name' => 'Tag.php', 'path' => 'app/Models', 'type' => 'model', 'migration' => true, 'factory' => true, 'seeder' => true],
            ['name' => 'User.php', 'path' => 'app/Models', 'type' => 'model', 'migration' => true, 'factory' => true, 'seeder' => true],
        ],

        'policies' => [
            ['name' => 'PostPolicy.php', 'path' => 'app/Policies', 'type' => 'policy', 'model' => 'Post'],
            ['name' => 'CategoryPolicy.php', 'path' => 'app/Policies', 'type' => 'policy', 'model' => 'Category'],
            ['name' => 'UserPolicy.php', 'path' => 'app/Policies', 'type' => 'policy', 'model' => 'User'],
        ],
        
        'providers' => [
            ['name' => 'BlogServiceProvider.php', 'path' => 'app/Providers', 'type' => 'provider', 'route_file' => 'blog', 'view_path' => 'admin/blog', 'view_namespace' => 'blog', 'migration_path' => 'blog'],
            ['name' => 'FrontendServiceProvider.php', 'path' => 'app/Providers', 'type' => 'provider', 'route_file' => 'frontend', 'view_path' => 'frontend/home', 'view_namespace' => 'frontend', 'migration_path' => 'frontend'],
            ['name' => 'SidebarServiceProvider.php', 'path' => 'app/Providers', 'type' => 'provider', 'route_file' => 'sidebar', 'view_path' => 'frontend/home', 'view_namespace' => 'sidebar', 'migration_path' => 'sidebar'],
        ],

        'requests' => [
            ['name' => 'BlogCategory.php', 'path' => 'app/Http/Requests', 'type' => 'request'],
            ['name' => 'BlogPost.php', 'path' => 'app/Http/Requests', 'type' => 'request'],
            ['name' => 'EditCategory.php', 'path' => 'app/Http/Requests', 'type' => 'request'],
            ['name' => 'EditPost.php', 'path' => 'app/Http/Requests', 'type' => 'request'],
        ],

        'views' => [
            ['name' => 'index.blade.php', 'path' => 'resources/views/admin/category'],
            ['name' => 'create.blade.php', 'path' => 'resources/views/admin/category'],
            ['name' => 'edit.blade.php', 'path' => 'resources/views/admin/category'],
            ['name' => 'create.blade.php', 'path' => 'resources/views/admin/post'],
            ['name' => 'edit.blade.php', 'path' => 'resources/views/admin/post'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/admin/post'],
            ['name' => 'edit.blade.php', 'path' => 'resources/views/admin/profile'],
            ['name' => 'show.blade.php', 'path' => 'resources/views/admin/profile'],
            ['name' => 'edit.blade.php', 'path' => 'resources/views/admin/post'],
            ['name' => 'dashboard.blade.php', 'path' => 'resources/views'],
            ['name' => 'login.blade.php', 'path' => 'resources/views/auth'],
            ['name' => 'register.blade.php', 'path' => 'resources/views/auth'],
            ['name' => 'sidebar.blade.php', 'path' => 'resources/views/components/frontend'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/frontend/about'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/frontend/category'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/frontend/contact'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/frontend/home'],
            ['name' => 'index.blade.php', 'path' => 'resources/views/frontend/post'],
            ['name' => 'show.blade.php', 'path' => 'resources/views/frontend/post'],
            ['name' => 'show.blade.php', 'path' => 'resources/views/frontend/profile'],
            ['name' => 'header.blade.php', 'path' => 'resources/views/layouts/admin/partials'],
            ['name' => 'sidebar-menu.blade.php', 'path' => 'resources/views/layouts/admin/partials'],
            ['name' => 'app.blade.php', 'path' => 'resources/views/layouts/admin'],
            ['name' => 'footer.blade.php', 'path' => 'resources/views/layouts/frontend/partials'],
            ['name' => 'navbar.blade.php', 'path' => 'resources/views/layouts/frontend/partials'],
            ['name' => 'app.blade.php', 'path' => 'resources/views/layouts/frontend'],

        ],

        
    ],

    'routes' => [
        'auto_generate' => true,
        'prefix' => '',
    ],
];
