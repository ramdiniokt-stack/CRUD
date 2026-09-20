<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['nama' => 'Rara', 'status' => 'aktif'],
            ['nama' => 'Riri', 'status' => 'aktif'],
            ['nama' => 'Roro', 'status' => 'tidak aktif'],
            ['nama' => 'Ruru', 'status' => 'aktif'],
            ['nama' => 'Rere', 'status' => 'aktif'],
        ];

        return view('members.index', compact('members'));
    }
}