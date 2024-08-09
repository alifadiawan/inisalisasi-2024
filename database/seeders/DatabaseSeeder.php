<?php

namespace Database\Seeders;

use App\Models\FileManager;
use App\Models\sub_task;
use App\Models\task_group;
use App\Models\TaskGroup;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // TaskGroup::create([
        //     'task_group_name' => 'PRA INISIALISASI'
        // ]);
        // TaskGroup::create([
        //     'task_group_name' => 'INISIALISASI Day 1'
        // ]);
        // TaskGroup::create([
        //     'task_group_name' => 'INISIALISASI Day 2'
        // ]);
        // TaskGroup::create([
        //     'task_group_name' => 'INISIALISASI Day 3'
        // ]);
        // TaskGroup::create([
        //     'task_group_name' => 'INISIALISASI Day 4'
        // ]);
        // User::factory(100)->create();
        FileManager::factory(200)->create();

        // FileManager::create([
        //     'SubTask_id' => 1,
        //     'user_id' => 1,
        //     'file_name' => 'dwddd.jpg',
        //     'file_path' => 'dwddd.jpg'
        // ]);

        // sub_task::create([
        //     'task_group_id' => 1,
        //     'task_name' => 'Membawa minuman band',
        //     'task_description' => 'Membawa Snack roti ketawa dan minuman band',
        //     'task_due' => Carbon::now(),
        // ]);
        // sub_task::create([
        //     'task_group_id' => 2,
        //     'task_name' => 'Membawa Snack roti ketawa dan minuman band',
        //     'task_description' => 'Membawa Snack roti ketawa dan minuman band',
        //     'task_due' => Carbon::now(),
        // ]);
        // sub_task::create([
        //     'task_group_id' => 2,
        //     'task_name' => 'Membawa Snack roti ketawa dan minuman band',
        //     'task_description' => 'Membawa Snack roti ketawa dan minuman band',
        //     'task_due' => Carbon::now(),
        // ]);
    }
}
