<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting Shreeza Tech</title>
</head>

<body style="margin:0;padding:40px;background:#f3f4f6;font-family:Arial,Helvetica,sans-serif;">

    <table width="650" align="center" cellpadding="0" cellspacing="0"
        style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.08);">

        <!-- Header -->
        <tr>
            <td style="background:#2563eb;padding:35px;text-align:center;color:#ffffff;">

                <h1 style="margin:0;font-size:30px;">
                    Thank You!
                </h1>

                <p style="margin-top:10px;font-size:16px;">
                    Your enquiry has been received successfully.
                </p>

            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:40px;">

                <p style="font-size:16px;color:#374151;">
                    Hi <strong>{{ $contact->name }}</strong>,
                </p>

                <p style="line-height:1.8;color:#4b5563;">
                    Thank you for contacting <strong>Shreeza Tech</strong>.
                    We appreciate your interest in our services.
                </p>

                <p style="line-height:1.8;color:#4b5563;">
                    We have received your enquiry regarding
                    <strong>{{ $contact->service }}</strong>.
                    Our team will carefully review your requirements and get back to you within
                    <strong>24 business hours</strong>.
                </p>

                <!-- Summary -->
                <table width="100%" cellpadding="12" cellspacing="0"
                    style="margin-top:25px;border-collapse:collapse;">

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
                            Service
                        </td>

                        <td style="border:1px solid #e5e7eb;">
                            {{ $contact->service }}
                        </td>
                    </tr>

                </table>

                <!-- CTA -->
                <div style="margin:35px 0;text-align:center;">

                    <a href="https://shreezatech.com"
                        style="display:inline-block;padding:14px 30px;background:#2563eb;color:#ffffff;text-decoration:none;border-radius:8px;font-weight:bold;">
                        Visit Our Website
                    </a>

                </div>

                <p style="line-height:1.8;color:#4b5563;">
                    If you have any additional information to share, simply reply to this email.
                </p>

                <p style="margin-top:35px;color:#374151;">
                    Best Regards,
                </p>

                <strong style="color:#2563eb;">
                    Shreeza Tech
                </strong>

                <br>

                <span style="color:#6b7280;">
                    Consulting & Software Solutions
                </span>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#111827;padding:25px;text-align:center;color:#9ca3af;">

                <strong style="color:#ffffff;">
                    Shreeza Tech. Consulting and Software Solutions
                </strong>

                <br>

                Building Future-Ready Digital Solutions

                <br><br>

                📧 info@shreezatech.com

                <br>

                🌐 https://shreezatech.com

            </td>
        </tr>

    </table>

</body>

</html>