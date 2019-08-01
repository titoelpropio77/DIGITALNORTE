<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Venta;
use App\Cliente;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = new Detail();
        $data = Detail::getAllListDetailBySales();

        $result['id'] = $data[0]->sale_id;
        $result['client'] =  ['name' => $data[0]->name , 'last_name' => $data[0]->name];
        $result['detail']= Array();
        $total = 0;
        foreach ( $data as  $value ) 
        {
            $total = $total +  $value->subtotal;
            $detail = [ 'quantity' => $value->quantity, 'product' => $value->product , 'price' => floatval( $value->price ), 'sub_total' => $value->subtotal];
            array_push($result[ 'detail' ],$detail );
        }
        $result['total'] = $total;

        // $result['client'] = ['name' => $result->]
        return response()->json($result);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
