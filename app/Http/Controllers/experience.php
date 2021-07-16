<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class experience extends Controller
{
    //
    public function showExperience(){
        return view('admin.experience');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'eventName' => 'required|min:20',
                'bandNames' => 'required',
                'startDate' => 'required',
                'endDate' => 'required',
                'ticketPrice' => 'required',
                'status' => 'required',
            ],
            [
                'eventName.required' => 'Nhap Thong Tin',
                'eventName.min' => 'Nhap Lon Hon 20 Ki Tu',
                'bandNames.required' => 'enter information',
                'startDate.required' => 'phải sau ngày hiện tại',
                'endDate.required' => 'phải sau ngày start',
                'ticketPrice.required' => ' lớn hơn 0.',
                'endDate.status' => 'có giá trị 0, 1, 2, 3',
            ]
        );
        return $validate;
    }
}
