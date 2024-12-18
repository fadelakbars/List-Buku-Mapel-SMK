<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('buku_mapel_kejuruans', function (Blueprint $table) {
            $table->dropColumn('jurusan'); // Hapus kolom lama
        });

        Schema::table('buku_mapel_kejuruans', function (Blueprint $table) {
            $table->enum('jurusan', [
                "TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI",
                "DESAIN KOMUNIKASI VISUAL",
                "TEKNIK KETENAGA LISTRIKAN",
                "AGRIBISNIS TANAMAN PANGAN DAN HOLTIKULTURA",
                "DESAIN PERMODELAN DAN INFORMASI BANGUNAN",
                "TEKNIK AUDIO VIDEO"
            ])->after('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku_mapel_kejuruans', function (Blueprint $table) {
            $table->dropColumn('jurusan'); // Hapus kolom baru
        });

        Schema::table('buku_mapel_kejuruans', function (Blueprint $table) {
            $table->enum('jurusan', ["TITL", "TAV", "TG", "TJKT", "DPIB", "ATPH"]);
        });
    }
};
