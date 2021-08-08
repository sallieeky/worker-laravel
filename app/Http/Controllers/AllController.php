<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AllController extends Controller
{

    public function landing()
    {
        $porto = Porto::all();
        return view('landing', compact('porto'));
    }

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function tambahPorto(Request $request)
    {
        Porto::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar' => $request->file('gambar')->getClientOriginalName(),
        ]);
        $request->file('gambar')->storeAs('public/porto', $request->file('gambar')->getClientOriginalName());
        return redirect()->back();
    }
    public function hapusPorto($id)
    {
        Porto::where('id', $id)->delete();
        return redirect()->back();
    }

    public function kirimPesan(Request $request)
    {
        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'pesan' => $request->message
        ];
        Mail::send('pesan', $data, function ($message) use ($request) {
            $message->subject($request->subject);
            $message->to('eksype2@gmail.com');
        });
        return redirect()->back();
    }
}
