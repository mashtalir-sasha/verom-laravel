<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Helpers;
use App\Jbicatalogs;
use App\Contacts;

class JbiController extends Controller
{
    public function showDetails($id)
    {

    	$contacts  = Contacts::find(1);

        $item = Jbicatalogs::where(function ($query) use ($id) {
            $query->where('id', $id);
        })->firstOrFail();

        return view('jbiDetails', ['item' => $item, 'contacts' => $contacts]);
    }
}
