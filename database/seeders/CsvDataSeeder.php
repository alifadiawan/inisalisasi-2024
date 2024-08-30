<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CsvDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Path to the CSV file
        $csvFile = Storage::path('data/data.csv');

        if (($handle = fopen($csvFile, 'r')) !== false) {
            // Skip the header row
            $header = fgetcsv($handle, 1000, ';');

            while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                // Map CSV data to columns
                $row = [
                    'name' => $data[0] ?? null,
                    'email' => $data[1] ?? null,
                    'kelompok' => $data[2] ?? null,
                    'nim' => $data[3] ?? null,
                    'isAdmin' => isset($data[4]) ? (int) $data[4] : 0,  // Convert to integer
                    'password' => $data[5] ? Hash::make($data[5]) : null,
                    'email_verified_at' => !empty($data[6]) ? Carbon::parse($data[6]) : null,
                ];

                // Insert into database
                DB::table('users')->insert($row);
            }

            // Close the CSV file
            fclose($handle);
        } else {
            $this->command->error('Could not open the CSV file.');
        }
    }
}
