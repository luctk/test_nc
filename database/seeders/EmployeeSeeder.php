<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rootEmployee = Employee::create([
            'name' => 'TRINH KHAC LUC',
        ]);
// Tạo các nhân viên con
        $employee1 = Employee::create([
            'name' => 'TRINH KHAC LUC 1',
            'manager_id' => $rootEmployee->id,
        ]);

        $employee2 = Employee::create([
            'name' => 'TRINH KHAC LUC 2',
            'manager_id' => $rootEmployee->id,
        ]);

        $employee3 = Employee::create([
            'name' => 'TRINH KHAC LUC 3',
            'manager_id' => $employee1->id,
        ]);
        $employee4 = Employee::create([
            'name' => 'TRINH KHAC LUC 4',
            'manager_id' => $employee3->id,
        ]);
        $employee5 = Employee::create([
            'name' => 'TRINH KHAC LUC 5',
            'manager_id' => $employee3->id,
        ]);
    }
}
