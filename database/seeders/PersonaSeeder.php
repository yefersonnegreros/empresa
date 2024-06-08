<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persona')->insert([
            [
                'cPerApellido' => 'Reyes',
                'cPerNombre' => 'Koki',
                'cPerDireccion' => 'Calle 123',
                'dPerFecNac' => '1985-06-15',
                'nPerEdad' => 36,
                'nPerSueldo' => 3000.50,
                'cPerRnd' => 'Rnd123'
            ],
            [
                'cPerApellido' => 'Lara',
                'cPerNombre' => 'Tito',
                'cPerDireccion' => '123 Main Street',
                'dPerFecNac' => '1978-03-25',
                'nPerEdad' => 43,
                'nPerSueldo' => 4000.75,
                'cPerRnd' => 'Rnd456'
            ],
            [
                'cPerApellido' => 'Camacho',
                'cPerNombre' => 'Teresa',
                'cPerDireccion' => 'Avenida 456',
                'dPerFecNac' => '1990-12-10',
                'nPerEdad' => 31,
                'nPerSueldo' => 2500.25,
                'cPerRnd' => 'Rnd789'
            ],
            [
                'cPerApellido' => 'Gonzales',
                'cPerNombre' => 'Jaime',
                'cPerDireccion' => 'Boulevard 789',
                'dPerFecNac' => '2000-08-20',
                'nPerEdad' => 21,
                'nPerSueldo' => 0.00,
                'cPerRnd' => 'RndABC'
            ],
            [
                'cPerApellido' => 'Collasos',
                'cPerNombre' => 'Gilberto',
                'cPerDireccion' => 'Las Lomas',
                'dPerFecNac' => '1955-05-05',
                'nPerEdad' => 69,
                'nPerSueldo' => 1500.00,
                'cPerRnd' => 'RndXYZ'
            ],
        ]);
    }
}
