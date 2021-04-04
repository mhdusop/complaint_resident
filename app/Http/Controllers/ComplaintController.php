<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
Use Auth;

class ComplaintController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
=======

class ComplaintController extends Controller
{

>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $complaints = Complaint::with(['user'])->paginate('15');
=======
        $complaints = Complaint::with(['user'])->paginate(15);
        // dd($complaints); 
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
        return view('admin_pages.complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view ('admin_pages.complaints.create');
=======
        return view('admin_pages.complaints.create');
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
 
      	// isi dengan nama folder tempat kemana file diupload
        Complaint::create([
            'user_id' => Auth::id(),
            'nik' => Auth::id(),
            'isi_laporan' => $request->isi_laporan,
            'foto'  => $nama_file,
            'status' => 'new'
        ]);


        return  redirect (route('pengaduan.index'));
=======
        Complaint::create([
            'user_id' => $request->nama,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status
        ]);
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($user_id)
    {
        $complaint = Complaint::find($user_id);
        return view('admin_pages.complaints.detail', compact('complaint'));
=======
    public function show($id)
    {
        //
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $complaint = Complaint::find($id);
        return view('admin_pages.complaints.edit', compact('complaint'));
=======
        $complaints = Complaint::find($id);
        return view('admin_pages.complaints.edit', compact('complaints'));
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $complaint = Complaint::find($id);
        $nama_file = null;
        if ($request->file('file')) {
            $file = $request->file('file');
 
            $nama_file = time()."_".$file->getClientOriginalName();
    
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
        } else {
            $nama_file = $complaint->foto;
        }
        
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(asset('data_file/'), $filename);
        }
        else {
            $nama_file = $complaint->foto;
        }

        $complaint->update([    
            'isi_laporan' => $request->isi_laporan,
            'foto'  => $request->$nama_file,
            'status' => 'new'
        ]);

        return  redirect (route('pengaduan.index'));
=======
        //
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        DB::table('complaints')->where('id', $id)->delete();
        return redirect()->route('pengaduan.index');
=======
        //
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
    }
}