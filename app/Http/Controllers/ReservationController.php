<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reservation;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $data = Reservation::all();
        foreach ($data as $rs)
        {
            $rs->user_id=User::find($rs->user_id)->name;

            $rs->product_id=Product::find($rs->product_id)->title;
            if ($rs->approve){
                $rs->approve = "Onaylandı";
            }
            else{
                $rs->approve = "Onaylanmadı";

            }
        }
        return view('admin.reservation', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_reservation_approve($id)
    {

        $data = Reservation::find($id);
        $data->product_id = $id;
        $data->approve=true;
        $data->save();
        return redirect()->route('xx');
    }
    public function admin_reservation_cancel($id)
    {

        $data = Reservation::find($id);
        $data->product_id = $id;
        $data->approve=false;
        $data->save();
        return redirect()->route('xx');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
