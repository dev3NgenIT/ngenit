<?php

namespace App\Http\Controllers\Event;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\EventCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['eventCategories'] = EventCategory::latest()->get();
        return view('admin.pages.eventCategory.all', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            EventCategory::create([
                'name'     => $request->name,
                'slug'     => Str::slug($request->name),
            ]);
            Toastr::success('Data Insert Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|string',
            ],
            [
                'required' => 'This :attribute field is needed.',
            ]
        );

        if ($validator->passes()) {
            EventCategory::find($id)->update([
                'name'     => $request->name,
                'slug'     => Str::slug($request->name),
            ]);
            Toastr::success('Data Updated Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventCategory::find($id)->delete();
    }
}

