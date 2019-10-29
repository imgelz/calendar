<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DataTables;
use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact;

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|max:1000'
        ]);
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        $response = [
            'success' => true,
            'data'  => $contact,
            'message' => 'Berhasil Menambah!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $contact = Contact::latest()->get();
            return Datatables::of($contact)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="button" class="hapus-contact btn btn-danger btn-sm" data-id="' . $row->id . '" data-subject="' . $row->subject . '" data-message="' . $row->message . '"  data-nama ="' . $row->nama . '" data-email ="' . $row->email . '" data-toggle="modal" data-target="#hapus-contact"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('contact.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact = Contact::findOrFail($request->id);
        if (!Contact::destroy($request->id)) {
            return redirect()->back();
        } else {
            $contact->delete();

            $response = [
                'success' => true,
                'data'  => $contact,
                'message' => 'Berhasil dihapus!'
            ];
            return response()->json($response, 200);
        }
    }
}
