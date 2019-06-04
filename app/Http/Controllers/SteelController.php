<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Steelcatalogs;
use App\Contacts;

class SteelController extends Controller
{
    public function showDetails($id)
    {

    	$contacts  = Contacts::find(1);

        $item = Steelcatalogs::where(function ($query) use ($id) {
            $query->where('id', $id);
        })->firstOrFail();

        return view('steelDetails', ['item' => $item, 'contacts' => $contacts]);
    }
}
