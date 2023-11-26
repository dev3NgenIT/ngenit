<?php

namespace App\Http\Controllers\Client;

use Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Client\SupportCase;
use App\Http\Controllers\Controller;
use App\Models\Client\Client;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Models\Client\MessageAttachment;
use Illuminate\Support\Facades\Validator;
use App\Models\Client\ClientSupportMessage;
use App\Models\Site;
use App\Models\User;

class ClientSupportMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
                'case_id'  => 'required|exists:support_cases,id',
                'name'       => 'required',
            ],
            [
                'required' => 'This :attribute must be required.',
                'exists'   => 'Support Case does not exist.',
            ],
        );



        if ($validator->passes()) {
            $supportCaseId = ClientSupportMessage::insertGetId([
                'case_id'     => $request->case_id,
                'case_code'   => $request->case_code,
                'sender_id'   => $request->sender_id,
                'sender_type' => $request->sender_type,
                'receiver_id' => $request->receiver_id,
                'name'        => $request->name,
                'subject'     => $request->subject,
                'message'     => $request->message,
                // 'attachment'  => $request->attachment,
            ]);
            SupportCase::find($request->case_id)->update([
                'status' => 'on_going',
            ]);
            if ($request->hasFile('attachment')) {
                $files = $request->file('attachment');

                foreach ($files as $file) {
                    $filePath = storage_path('app/public/');
                    $uploadedFile = Helper::customUpload($file, $filePath);

                    if ($uploadedFile['status'] == 1) {
                        MessageAttachment::create([
                            'message_id' =>  $supportCaseId,
                            'attachment' => $uploadedFile['file_name'],
                        ]);
                    }
                }
            }

            if ($request->sender_type == 'admin') {
                $case = SupportCase::where('code', $request->case_code)->first();
                $client = Client::find($case->client_id);
                $client_emails = $client->email;
            } else {
                $client_one = ['support@ngenitltd.com', 'ngenit@gmail.com'];
                $client_two = User::whereJsonContains('department', 'support')->pluck('email')->toArray();
                $client_emails = array_merge($client_one, $client_two);
            }

            $site = Site::latest('id')->first();

            $data = [
                'name' => $request->input('name'),
                'subject' => $request->input('subject'), // changed to input('subject')
                'message' => $request->input('message'), // changed to input('message')
                'logo' => $site->logo,
                'code' => $request->case_code,
                'link' => route('support-case.show', $request->case_code),
            ];

            $mail_cc = $request->input('mail_cc');

            // Send the email
            Mail::send('mail.case_message', ['data' => $data], function ($message) use ($client_emails, $mail_cc, $request) { // changed to use $client_emails
                $message->from('support@ngenitltd.com', 'NGEN-Support');
                $message->to($client_emails); // changed to use $client_emails
                $message->subject($request->input('subject'));

                // CC recipients
                if ($mail_cc) {
                    $message->cc(explode(',', $mail_cc));
                }

                // Attachments
                if ($request->hasFile('attachment')) {
                    $files = $request->file('attachment');
                    foreach ($files as $file) {
                        $message->attach($file->getRealPath(), [
                            'as' => $file->getClientOriginalName(),
                        ]);
                    }
                }
            });

            Toastr::success('Message Sent Successfully');
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
