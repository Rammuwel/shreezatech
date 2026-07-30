<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>

<body style="margin:0;padding:40px;background:#f3f4f6;font-family:Arial,sans-serif;">

    <table width="650" align="center" cellpadding="0" cellspacing="0"
        style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 8px 30px rgba(0,0,0,.08);">

        <!-- Header -->
        <tr>
            <td style="background:#2563eb;padding:25px;text-align:center;color:#ffffff;">

                <h1 style="margin:0;">
                    📩 New Contact Enquiry
                </h1>

                <p style="margin-top:8px;font-size:15px;">
                    Shreeza • Tech Consulting & Software Solutions
                </p>

            </td>
        </tr>

        <!-- Content -->
        <tr>
            <td style="padding:35px;">

                <p style="margin-top:0;font-size:16px;color:#374151;">
                    A new enquiry has been submitted through the Shreeza website.
                </p>

                <table width="100%" cellpadding="12" cellspacing="0"
                    style="border-collapse:collapse;margin-top:20px;">

                    <tr>
                        <td width="180"
                            style="background:#f9fafb;border:1px solid #e5e7eb;font-weight:bold;">
                            Name
                        </td>

                        <td style="border:1px solid #e5e7eb;">
                            {{ $contact->name }}
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background:#f9fafb;border:1px solid #e5e7eb;font-weight:bold;">
                            Email
                        </td>

                        <td style="border:1px solid #e5e7eb;">
                            {{ $contact->email }}
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background:#f9fafb;border:1px solid #e5e7eb;font-weight:bold;">
                            Phone
                        </td>

                        <td style="border:1px solid #e5e7eb;">
                            {{ $contact->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="background:#f9fafb;border:1px solid #e5e7eb;font-weight:bold;">
                            Service
                        </td>

                        <td style="border:1px solid #e5e7eb;">
                            {{ $contact->service }}
                        </td>
                    </tr>

                    <tr>
                        <td valign="top"
                            style="background:#f9fafb;border:1px solid #e5e7eb;font-weight:bold;">
                            Message
                        </td>

                        <td style="border:1px solid #e5e7eb;line-height:1.8;">
                            {!! nl2br(e($contact->message)) !!}
                        </td>
                    </tr>

                </table>

                <p style="margin-top:25px;color:#6b7280;font-size:14px;">
                    Submitted on:
                    <strong>{{ $contact->created_at->format('d M Y, h:i A') }}</strong>
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#111827;padding:20px;text-align:center;color:#9ca3af;font-size:13px;">

                <strong style="color:#ffffff;">
                    Shreeza
                </strong>

                <br>

                Tech Consulting & Software Solutions

                <br><br>

                This email was automatically generated from your website contact form.

            </td>
        </tr>

    </table>

</body>

</html>