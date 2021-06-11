<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Order;
use App\Http\Resources\OrderResource;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $order = OrderResource::collection(Order::all());

            return response()->json([
                'status' => true,
                'code' => Response::HTTP_OK,
                'data' => $order,
            ]);
        }catch(Exception $e) {
            return response()->json([
                'status'=>false,
                'code'=>Response::HTTP_INTERNAL_SERVER_ERROR ,
                'message'=>$e->getMessage()
            ]);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        try {

            $order = new OrderResource(Order::find($id)); 

            return response()->json([
                'status' => true,
                'code' => Response::HTTP_OK ,
                'data' => $order,
            ]);
        }catch(Exception $e) {
            return response()->json([
                'status'=>false,
                'code'=>400 ,
                'message'=>$e->getMessage()
            ]);
        }
             
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
