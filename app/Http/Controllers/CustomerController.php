<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    private $data;
    public function index()
    {
        $customers = Customer::get()->toArray();
        return view('admin.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:75',
            'address' => 'required|max:255',
            ]);
            
        $name = htmlspecialchars(strtolower($request->name));
        $gender = htmlspecialchars(strtolower($request->gender));
        $address = htmlspecialchars(strtolower($request->address));
        $this->data = ['name' => $name, 'gender' => $gender, 'address' => $address];
        Customer::create($this->data);
        return redirect('/')->with('status', 'Data Customer Baru Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $idDecode= base64_decode($id);
        $result = Customer::where('id', $idDecode)->first();
        return view('admin.show', compact('result'));
    }

    public function edit($id)
    {
        $idDecode = base64_decode($id);
        $customer = Customer::where('id', $idDecode)->first()->toArray();
        return view('admin.edit', compact('customer'));
    }

    public function update(Request $request)
    {
        $data = ['id' => $request->id, 'name' => $request->name, 'gender' => $request->gender, 'address' => $request->address];
        Customer::where('id', $data['id'])->update($data);
        return redirect('/')->with('status', 'Perubaha Data Customer Telah Disimpan');
    }

    public function destroy($id)
    {
       $idDecode = base64_decode($id);
       Customer::destroy($idDecode);
       return redirect('/')->with('status', 'Data Customer Berhasil Dihapus');
    }
}
