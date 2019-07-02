<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Anggota;
use App\Hadiah;

class DikController extends Controller {

    public function index() {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }

    public function enkripsi() {
        $encrypted = Crypt::encryptString('Belajar Laravel Di malasngoding.com');
        $decrypted = Crypt::decryptString($encrypted);

        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }

    public function data() {

        $parameter = [
            'nama' => 'Nama seseorang',
            'pekerjaan' => 'Programmer',
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/" . $enkripsi . "'>Klik</a>";
    }

    public function data_proses($data) {
        $data = Crypt::decrypt($data);

        echo "Nama : " . $data['nama'];
        echo "<br/>";
        echo "Pekerjaan : " . $data['pekerjaan'];
    }

    public function hash() {
        $hash_password_saya = Hash::make('halo123');
        echo $hash_password_saya;
    }

}
