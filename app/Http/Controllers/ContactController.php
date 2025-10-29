<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Send contact form email directly to the owner
     */
    public function send(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000'
        ]);

        try {
            // Send email directly using Mail facade
            Mail::send([], [], function ($message) use ($validated) {
                $message->to('asemmohsen911@gmail.com')
                    ->subject('Portfolio Contact: ' . $validated['subject'])
                    ->from($validated['email'], $validated['name'])
                    ->html($this->buildEmailContent($validated));
            });

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully! I will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again or email me directly at asemmohsen911@gmail.com'
            ], 500);
        }
    }

    /**
     * Build the HTML content for the email
     */
    private function buildEmailContent(array $data): string
    {
        return "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background-color: #007bff; color: white; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
                    .content { background-color: #f8f9fa; padding: 30px; border-radius: 0 0 5px 5px; }
                    .field { margin-bottom: 20px; }
                    .label { font-weight: bold; color: #007bff; }
                    .value { margin-top: 5px; }
                    .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #dee2e6; font-size: 12px; color: #6c757d; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2>New Contact Form Message</h2>
                    </div>
                    <div class='content'>
                        <div class='field'>
                            <div class='label'>From:</div>
                            <div class='value'>{$data['name']}</div>
                        </div>
                        <div class='field'>
                            <div class='label'>Email:</div>
                            <div class='value'><a href='mailto:{$data['email']}'>{$data['email']}</a></div>
                        </div>
                        <div class='field'>
                            <div class='label'>Subject:</div>
                            <div class='value'>{$data['subject']}</div>
                        </div>
                        <div class='field'>
                            <div class='label'>Message:</div>
                            <div class='value'>" . nl2br(htmlspecialchars($data['message'])) . "</div>
                        </div>
                        <div class='footer'>
                            <p>This message was sent from your portfolio contact form.</p>
                        </div>
                    </div>
                </div>
            </body>
            </html>
        ";
    }
}

