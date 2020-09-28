<?php

namespace App\Http\Controllers;
use App\Paga;

use Illuminate\Http\Request;

class PagaCtrl extends Controller
{
  public function paga(){
    $pagamenti = Paga::all();
    return view('pagamenti', compact("pagamenti"));
  }
  public function destr($id){
    $pagamento = Paga::findOrFail($id);
    $pagamento -> delete();
    return redirect() -> route('payments');
  }
  public function edit($id){
    $pagamento = Paga::findOrFail($id);
    return view('edit', compact('pagamento'));
  }
  public function update(Request $request, $id){ // nella request sono contenuti i value del form
    $data = $request -> all();
    $pagamento = Paga::findOrFail($id);
    $pagamento -> update($data);
    return redirect() -> route('payments');
  }
}
