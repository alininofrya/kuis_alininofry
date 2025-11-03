<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function up(): void
{
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim')->unique();
        $table->string('email')->unique();
        $table->string('jurusan');
        $table->text('alamat');
        $table->timestamps();
    });
}

}
