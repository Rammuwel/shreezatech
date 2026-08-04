<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Shreeza Newsletter</title>
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
                    Tech Consulting &amp; Software Solutions
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

                <h2 class="serif" style="margin:0;font-size:30px;color:#1b2a3d;font-weight:700;">
                    Welcome Aboard
                </h2>

                <div style="width:40px;border-top:1px solid #b98d2d;margin:18px auto 0;"></div>

                <p style="margin:18px 0 0;font-size:14px;color:#6c7786;letter-spacing:.5px;">
                    Your subscription to the Shreeza newsletter is confirmed.
                </p>

            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:10px 50px 20px;">

                <p style="margin:0 0 22px;font-size:14px;color:#1b2a3d;line-height:1.8;">
                    Hello,
                </p>

                <p style="margin:0 0 18px;font-size:14px;color:#3e4a59;line-height:1.8;">
                    Thank you for subscribing to the <strong>Shreeza</strong> newsletter. You will now receive insights on technology trends, product development, and industry solutions straight to your inbox.
                </p>

                <p style="margin:0 0 28px;font-size:14px;color:#3e4a59;line-height:1.8;">
                    We share only what is useful — no spam, ever. Unsubscribe anytime with a single click.
                </p>

                <!-- CTA -->
                <div style="text-align:center;margin:0 0 34px;">

                    <a href="https://shreezatech.com"
                        style="display:inline-block;padding:13px 36px;border:1px solid #1b2a3d;background:#1b2a3d;color:#ffffff;text-decoration:none;font-size:13px;letter-spacing:1px;">
                        VISIT OUR WEBSITE
                    </a>

                </div>

                <p style="margin:0 0 30px;font-size:14px;color:#3e4a59;line-height:1.8;">
                    To stop receiving our newsletter, simply
                    <a href="{{ route('newsletter.unsubscribe', $subscriber->unsubscribe_token) }}"
                        style="color:#1b2a3d;">click here to unsubscribe</a>.
                </p>

                <p style="margin:0 0 6px;font-size:14px;color:#1b2a3d;">
                    Best regards,
                </p>

                <p class="serif" style="margin:0;font-size:19px;color:#1b2a3d;font-weight:700;">
                    Shreeza
                </p>

                <p style="margin:4px 0 0;font-size:12px;color:#6c7786;">
                    Tech Consulting &amp; Software Solutions
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
                    info@shreezatech.com &nbsp;&nbsp;|&nbsp;&nbsp; https://shreezatech.com
                </p>

            </td>
        </tr>

    </table>

</body>

</html>
