<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {

        for ($i = 0; $i < 100; $i++) {
            Student::create([
        "nim" => "F1E124032$i",
        "name" => "Wisnu Nugroho ke-$i",
        "prodi" => "Sistem Informasi",
        "angkatan" => 2024,
        "alamat" => "Jambi"
            ]);
    }
    
        Student::create([
            "nim" => Str::random(8),
            "name" => Str::random(20),
            "prodi" => Str::random(15),
            "angkatan" => 2024,
            "alamat" => Str::random(50)
        ]);

}}
