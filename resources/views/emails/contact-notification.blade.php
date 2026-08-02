<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
    <style>
        body, td, p, a, span, h1, h2, h3, div, table { font-family: Arial, Helvetica, sans-serif; }
        .serif { font-family: Georgia, 'Times New Roman', serif; }
    </style>
</head>

<body style="margin:0;padding:40px 20px;background:#f6f7f9;">

    <table width="600" align="center" cellpadding="0" cellspacing="0"
        style="background:#ffffff;border:1px solid #e2e6ea;">

        <!-- Brand Header -->
        <tr>
            <td style="padding:40px 50px 28px;text-align:center;">

                <h1 class="serif" style="margin:0;font-size:22px;letter-spacing:4px;color:#1b2a3d;font-weight:700;">
                    SHREEZA
                </h1>

                <p style="margin:8px 0 0;font-size:10px;letter-spacing:2px;color:#6c7786;text-transform:uppercase;">
                    Internal Notification
                </p>

            </td>
        </tr>

        <!-- Gold Rule -->
        <tr>
            <td style="padding:0 50px;">
                <div style="width:100%;border-top:2px solid #b98d2d;"></div>
            </td>
        </tr>

        <!-- Intro -->
        <tr>
            <td style="padding:44px 50px 30px;text-align:center;">

                <h2 class="serif" style="margin:0;font-size:28px;color:#1b2a3d;font-weight:700;">
                    New Contact Enquiry
                </h2>

                <div style="width:40px;border-top:1px solid #b98d2d;margin:18px auto 0;"></div>

                <p style="margin:18px 0 0;font-size:14px;color:#6c7786;letter-spacing:.5px;">
                    A new enquiry has been submitted via the Shreeza website.
                </p>

            </td>
        </tr>

        <!-- Details -->
        <tr>
            <td style="padding:10px 50px 20px;">

                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">

                    <tr>
                        <td style="border:1px solid #e2e6ea;border-right:none;background:#fafbfc;padding:13px 18px;font-size:12px;color:#6c7786;letter-spacing:1px;text-transform:uppercase;width:130px;">
                            Name
                        </td>
                        <td style="border:1px solid #e2e6ea;padding:13px 18px;font-size:14px;color:#1b2a3d;">
                            {{ $contact->name }}
                        </td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #e2e6ea;border-right:none;border-top:none;background:#fafbfc;padding:13px 18px;font-size:12px;color:#6c7786;letter-spacing:1px;text-transform:uppercase;">
                            Email
                        </td>
                        <td style="border:1px solid #e2e6ea;border-top:none;padding:13px 18px;font-size:14px;color:#1b2a3d;">
                            {{ $contact->email }}
                        </td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #e2e6ea;border-right:none;border-top:none;background:#fafbfc;padding:13px 18px;font-size:12px;color:#6c7786;letter-spacing:1px;text-transform:uppercase;">
                            Phone
                        </td>
                        <td style="border:1px solid #e2e6ea;border-top:none;padding:13px 18px;font-size:14px;color:#1b2a3d;">
                            {{ $contact->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #e2e6ea;border-right:none;border-top:none;background:#fafbfc;padding:13px 18px;font-size:12px;color:#6c7786;letter-spacing:1px;text-transform:uppercase;">
                            Service
                        </td>
                        <td style="border:1px solid #e2e6ea;border-top:none;padding:13px 18px;font-size:14px;color:#1b2a3d;">
                            {{ $contact->service }}
                        </td>
                    </tr>

                    <tr>
                        <td valign="top" style="border:1px solid #e2e6ea;border-right:none;border-top:none;background:#fafbfc;padding:13px 18px;font-size:12px;color:#6c7786;letter-spacing:1px;text-transform:uppercase;">
                            Message
                        </td>
                        <td style="border:1px solid #e2e6ea;border-top:none;padding:13px 18px;font-size:14px;color:#1b2a3d;line-height:1.8;">
                            {!! nl2br(e($contact->message)) !!}
                        </td>
                    </tr>

                </table>

                <p style="margin:24px 0 0;font-size:12px;color:#6c7786;">
                    Submitted on:
                    <strong style="color:#1b2a3d;">{{ $contact->created_at->format('d M Y, h:i A') }}</strong>
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#1b2a3d;padding:26px 50px;text-align:center;">

                <p style="margin:0 0 6px;font-size:12px;color:#ffffff;letter-spacing:1px;">
                    SHREEZA
                </p>

                <p style="margin:0;font-size:11px;color:#8a94a3;">
                    This email was generated automatically from the Shreeza website contact form.
                </p>

            </td>
        </tr>

    </table>

</body>

</html>
