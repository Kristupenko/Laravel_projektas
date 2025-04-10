<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;

Mail::to('recipient@example.com')->send(new FormSubmissionMail($formData));

