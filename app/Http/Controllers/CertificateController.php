<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    function store(Request $r)
    {
        $now = Carbon::now();
        $format = $now->format('D j-M-Y g:i:s.u A');
        $user = Auth::user();
        $file = $r->file('certificate');
        $fileName = $now->format('D j-M-Y g-i-s-u-A') . ' ' . $r->input('name') . ' ' . $r->input('sha512') . '.' . $r->file('certificate')->extension();
        $filePath = $file->storeAs('public', $fileName);
        $certificate = new Certificate();
        $certificate->user_id = $user->id;
        $certificate->name = $r->input('name');
        $certificate->sha512 = $r->input('sha512');
        $certificate->time = $format;
        $certificate->file_path = $filePath;
        $certificate->save();
        return redirect('main');
    }
}
