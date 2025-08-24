<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SuperScaffold extends Command
{
    protected $signature = 'make:super-scaffold {name}';
    protected $description = 'Generate folders, files, migrations, factories, seeders, and routes from config';

    public function handle()
    {
        $config = config('scaffold');
        $createdRoutes = [];

        // 1️⃣ ফোল্ডার তৈরি
        foreach ($config['folders'] as $folder) {
            File::makeDirectory(base_path($folder), 0755, true, true);
            $this->line("📁 Folder: {$folder}");
        }

        // 2️⃣ রিসোর্স জেনারেশন
        foreach ($config['resources'] as $type => $items) {
            foreach ($items as $item) {
                $stubPath = base_path("stubs/scaffold/{$type}.stub");
                if (! File::exists($stubPath)) {
                    $this->warn("Stub missing: {$type}");
                    continue;
                }

                $content = File::get($stubPath);
                $content = str_replace(
                    ['{{ namespace }}', '{{ class }}', '{{ view_path }}'],
                    [
                        $this->getNamespace($item['path']),
                        pathinfo($item['name'], PATHINFO_FILENAME),
                        $this->getViewPath($item['path'], $item['name'])
                    ],
                    $content
                );

                $filePath = base_path($item['path'].'/'.$item['name']);
                File::put($filePath, $content);
                $this->line("✅ File: {$item['name']}");

                // 3️⃣ মডেল হলে মাইগ্রেশন/ফ্যাক্টরি/সিডার বানানো
                if ($type === 'models') {
                    $modelName = pathinfo($item['name'], PATHINFO_FILENAME);
                    if (!empty($item['migration'])) {
                        $this->callSilent('make:migration', ['name' => 'create_'.Str::snake(Str::pluralStudly($modelName)).'_table']);
                        $this->line("🛠 Migration for {$modelName}");
                    }
                    if (!empty($item['factory'])) {
                        $this->callSilent('make:factory', ['name' => $modelName.'Factory', '--model' => $modelName]);
                        $this->line("🛠 Factory for {$modelName}");
                    }
                    if (!empty($item['seeder'])) {
                        $this->callSilent('make:seeder', ['name' => $modelName.'Seeder']);
                        $this->line("🛠 Seeder for {$modelName}");
                    }
                }

                // 4️⃣ রাউট জেনারেশন
                if (!empty($item['route']) && $config['routes']['auto_generate'] === true) {
                    $routeEntry = "Route::resource('".Str::kebab(str_replace('Controller','',$item['name']))."', \\{$this->getNamespace($item['path'])}\\{$item['name']}::class);";
                    $createdRoutes[] = $routeEntry;
                }
            }
        }

        // 5️⃣ রাউট web.php তে লেখা
        if (!empty($createdRoutes)) {
            $routeFile = base_path('routes/web.php');
            File::append($routeFile, "\n// Auto-generated routes\n".implode("\n", $createdRoutes)."\n");
            $this->info("📌 Routes updated in web.php");
        }

        $this->info("\n🎯 Scaffolding Complete!");
    }

    private function getNamespace($path)
    {
        return str_replace('/', '\\', ucfirst(trim(str_replace('app/', 'App/', $path), '/')));
    }

    private function getViewPath($path, $name)
    {
        return str_replace('resources/views/', '', strtolower($path))
            .'/'.strtolower(str_replace('.blade.php','',$name));
    }
}
