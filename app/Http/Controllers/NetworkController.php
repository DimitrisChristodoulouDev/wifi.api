<?php

namespace App\Http\Controllers;

use App\NetworkModel;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /*
     * verifyNetwork/:id //If the key is working (from Notifications)
     * editNetwork/:net_id
     * myNetworks
     * network/:net_id
     * allNetworks
     */

    /**
     * @return string
     */
    public function verifyNetwork($id)
    {
        $net = NetworkModel::find($id);
        echo $net;


    }



}
