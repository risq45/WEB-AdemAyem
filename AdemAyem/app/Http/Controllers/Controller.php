<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

use App\Models\{User, Makanan, Bahanmakanan, Pegawai, Gaji, Cuti};

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard(){
        if (Auth::check()){
            $user = Auth::user();

            return view('dashboard/dashboard', compact('user'));
        }
        return redirect('/login');
    }

    public function loginpage(){
        return view('dashboard/login');
    }

    public function registpage(){
        return view('dashboard/register');
    }

    public function stokmakanan(){
        $makanan = Makanan::all();

        return view('dashboard/makanan/stokmakanan', compact('makanan'));
    }

    public function tambahstokmakanan(){
        return view('dashboard/makanan/tambahstokmakanan');
    }

    public function tambahstokmakananpost(Request $request){
        $makanan = new Makanan();
        $makanan->nama = $request->nama;
        $makanan->status = ($request->status === "tersedia");
        $makanan->stockmin = $request->stockmin;
        $makanan->stockmax = $request->stockmax;
        $makanan->kategori = $request->kategori;
        $makanan->save();

        return redirect('/stokmakanan');
    }

    public function hapusstokmakananpost($id){
        $makanan = Makanan::where('id', $id)->first();
        $makanan->delete();

        return redirect('/stokmakanan');
    }

    public function editstokmakanan($id){
        $makanan = Makanan::where('id', $id)->first();

        return view('dashboard/makanan/editstokmakanan', compact('makanan'));
    }

    public function editstokmakananpost($id, Request $request){
        $makanan = Makanan::where('id', $id)->first();
        $makanan->nama = $request->nama;
        $makanan->status = ($request->status === "tersedia");
        $makanan->stockmin = $request->stockmin;
        $makanan->stockmax = $request->stockmax;
        $makanan->kategori = $request->kategori;
        $makanan->save();

        return view('dashboard/makanan/editstokmakanan', compact('makanan'));
    }

    public function stokbahanmakanan(){
        $makanan = Bahanmakanan::all();

        return view('dashboard/bahanmakanan/stokbahanmakanan', compact('makanan'));
    }

    public function tambahstokbahanmakanan(){
        return view('dashboard/bahanmakanan/tambahstokbahanmakanan');
    }

    public function tambahstokbahanmakananpost(Request $request){
        $makanan = new Bahanmakanan();
        $makanan->nama = $request->nama;
        $makanan->status = ($request->status === "tersedia");
        $makanan->stockmin = $request->stockmin;
        $makanan->stockmax = $request->stockmax;
        $makanan->kategori = $request->kategori;
        $makanan->satuanmin = $request->satuanmin;
        $makanan->satuanmax = $request->satuanmax;
        $makanan->save();

        return redirect('/stokbahanmakanan');
    }

    public function hapusstokbahanmakananpost($id){
        $makanan = Bahanmakanan::where('id', $id)->first();
        $makanan->delete();

        return redirect('/stokbahanmakanan');
    }

    public function editstokbahanmakanan($id){
        $makanan = Bahanmakanan::where('id', $id)->first();

        return view('dashboard/bahanmakanan/editstokbahanmakanan', compact('makanan'));
    }

    public function editstokbahanmakananpost($id, Request $request){
        $makanan = Bahanmakanan::where('id', $id)->first();
        $makanan->nama = $request->nama;
        $makanan->status = ($request->status === "tersedia");
        $makanan->stockmin = $request->stockmin;
        $makanan->stockmax = $request->stockmax;
        $makanan->kategori = $request->kategori;
        $makanan->satuanmin = $request->satuanmin;
        $makanan->satuanmax = $request->satuanmax;
        $makanan->save();

        return view('dashboard/bahanmakanan/editstokbahanmakanan', compact('makanan'));
    }

    public function daftarpegawai(){
        $pegawai = Pegawai::all();

        return view('dashboard/daftarpegawai/daftarpegawai', compact('pegawai'));
    }

    public function tambahpegawai(){
        return view('dashboard/daftarpegawai/tambahpegawai');
    }

    public function tambahpegawaipost(Request $request){
        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->hp = $request->hp;
        $pegawai->save();

        return redirect('/daftarpegawai');
    }

    public function hapuspegawaipost($id){
        $pegawai = Pegawai::where('id', $id)->first();
        $pegawai->delete();

        return redirect('/daftarpegawai');
    }

    public function editpegawai($id){
        $pegawai = Pegawai::where('id', $id)->first();

        return view('dashboard/daftarpegawai/editpegawai', compact('pegawai'));
    }

    public function editpegawaipost($id, Request $request){
        $pegawai = Pegawai::where('id', $id)->first();
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->hp = $request->hp;
        $pegawai->save();

        return view('dashboard/daftarpegawai/editpegawai', compact('pegawai'));
    }

    public function absensipegawai(){
        return view('dashboard/pegawai/absensipegawai');
    }

    public function gajipegawai(){
        $gaji = Gaji::all();

        return view('dashboard/gajipegawai/gajipegawai', compact('gaji'));
    }

    public function tambahgajipegawai(){
        return view('dashboard/gajipegawai/tambahgajipegawai');
    }

    public function tambahgajipegawaipost(Request $request){
        $gaji = new Gaji();
        $gaji->nama = $request->nama;
        $gaji->jabatan = $request->jabatan;
        $gaji->hp = $request->hp;
        $gaji->gajipokok = $request->gajipokok;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->tanggal = $request->tanggal;
        $gaji->save();

        return redirect('/gajipegawai');
    }

    public function hapusgajipegawaipost($id){
        $gaji = Gaji::where('id', $id)->first();
        $gaji->delete();

        return redirect('/gajipegawai');
    }

    public function editgajipegawai($id){
        $gaji = Gaji::where('id', $id)->first();

        return view('dashboard/gajipegawai/editgajipegawai', compact('gaji'));
    }

    public function editgajipegawaipost($id, Request $request){
        $gaji = Gaji::where('id', $id)->first();
        $gaji->nama = $request->nama;
        $gaji->jabatan = $request->jabatan;
        $gaji->hp = $request->hp;
        $gaji->gajipokok = $request->gajipokok;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->tanggal = $request->tanggal;
        $gaji->save();

        return view('dashboard/gajipegawai/editgajipegawai', compact('gaji'));
    }

    public function cutipegawai(){
        $cuti = Cuti::all();

        return view('dashboard/cutipegawai/cutipegawai', compact('cuti'));
    }

    public function tambahcutipegawai(){
        return view('dashboard/cutipegawai/tambahcutipegawai');
    }

    public function tambahcutipegawaipost(Request $request){
        $cuti = new Cuti();
        $cuti->nama = $request->nama;
        $cuti->mulai = $request->mulai;
        $cuti->akhir = $request->akhir;
        $cuti->hari = $request->hari;
        $cuti->keperluan = $request->keperluan;
        $cuti->keterangan = $request->keterangan;
        $cuti->save();

        return redirect('/cutipegawai');
    }

    public function detailcutipegawai($id){
        $cuti = Cuti::where('id', $id)->first();

        return view('dashboard/cutipegawai/detailcutipegawai', compact('cuti'));
    }

    public function editcutipegawaipost($id, Request $request){
        $cuti = Cuti::where('id', $id)->first();
        $cuti->nama = $request->nama;
        $cuti->mulai = $request->mulai;
        $cuti->akhir = $request->akhir;
        $cuti->hari = $request->hari;
        $cuti->keperluan = $request->keperluan;
        $cuti->keterangan = $request->keterangan;
        $cuti->save();

        return view('dashboard/cutipegawai/detailcutipegawai', compact('cuti'));
    }

    public function laporanpendapatan(){
        return view('dashboard/laporanpendapatan');
    }

    public function tagihan(){
        return view('dashboard/tagihan');
    }

    public function invoices(){
        return view('dashboard/invoices');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            return redirect()->back()->withErrors([
                'email' => 'Email belum terdaftar !',
            ])->withInput($request->except('password'));
        } elseif (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors([
                'password' => 'Password yang dimasukkan salah !',
            ])->withInput($request->except('password'));
        } else {
            Auth::login($user);
            $request->session()->regenerate();
            $user = Auth::user();

            return redirect('/');
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|string|email',
            'nama' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            return redirect()->back()->withErrors([
                'email' => 'Email sudah terdaftar !',
            ])->withInput($request->except('password'));
        }

        // Create the new user
        $user = new User();
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect to intended page
        return redirect('/login');
    }
}
