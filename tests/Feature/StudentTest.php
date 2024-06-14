<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_student()
    {
        $student = Student::create([
            'name' => 'John Doe',
            'email' => 'your_name@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01',
            'device_id' => '74be16979710d4c4e7c6647856088456',
        ]);

        $this->assertTrue($student->exists());
    }
}
