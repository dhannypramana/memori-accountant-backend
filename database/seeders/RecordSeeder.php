<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
            'id' => Str::uuid(),
            'type' => 'expense',
            'about' => 'Jajan Latihan',
            'amount' => 50000,
            'date' => now()
        ]);
        Record::create([
            'id' => Str::uuid(),
            'type' => 'expense',
            'about' => 'Beli HT',
            'amount' => 350000,
            'date' => now()
        ]);
        Record::create([
            'id' => Str::uuid(),
            'type' => 'income',
            'about' => 'Saweran SB',
            'amount' => 50000,
            'date' => now()
        ]);
    }
}
