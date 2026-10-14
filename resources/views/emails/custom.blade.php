<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['subject'] }}</title>
</head>

<body style="margin:0;padding:0;background:#f4f7fb;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0"
        style="background:#f4f7fb;">

        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0" border="0"
                    style="background:#ffffff;">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:#0d6efd;padding:20px;">

                            <img src="http://www.ahcenterbd.com/frontend/assets/images/logo.png"
                                alt="Advanced Hernia Center Bangladesh"
                                style="max-width:220px;height:auto;display:block;">

                        </td>
                    </tr>

                    <!-- Title -->
                    <tr>
                        <td style="padding:20px;">

                            <h1 style="margin:0;color:#1b1b1b;font-size:28px;font-weight:700;">
                                {{ $data['title'] }}
                            </h1>

                            <p style="margin-top:10px;color:#6c757d;font-size:15px;">
                                Trusted Hernia Treatment & Surgical Care
                            </p>

                        </td>
                    </tr>

                    <!-- Subject -->
                    <tr>
                        <td style="padding:0 20px 20px;">

                            <div style="
                                background:#f8f9fc;
                                border-left:4px solid #0d6efd;
                                padding:15px;">

                                <strong style="color:#0d6efd;">
                                    Subject:
                                </strong>

                                <span style="color:#333;">
                                    {{ $data['subject'] }}
                                </span>

                            </div>

                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="padding:0 20px 20px;">

                            <div style="
                                background:#ffffff;
                                border:1px solid #eef2f7;
                                padding:20px;">

                                <p style="
                                    margin:0;
                                    color:#555;
                                    line-height:1.9;
                                    font-size:15px;">

                                    {!! nl2br(e($data['message'])) !!}

                                </p>

                            </div>

                        </td>
                    </tr>

                    <!-- CTA -->
                    <tr>
                        <td align="center" style="padding:20px;">

                            <a href="https://ahcenterbd.com"
                                style="
                                background:#0d6efd;
                                color:#ffffff;
                                text-decoration:none;
                                padding:12px 30px;
                                display:inline-block;
                                font-size:15px;
                                font-weight:600;">

                                Visit Our Website

                            </a>

                        </td>
                    </tr>

                    <!-- Contact -->
                    <tr>
                        <td style="padding:20px;">

                            <div style="
                                background:#f8f9fc;
                                padding:20px;">

                                <h3 style="
                                    margin-top:0;
                                    margin-bottom:15px;
                                    color:#0d6efd;">

                                    Contact Information

                                </h3>

                                <p style="margin:8px 0;color:#555;">
                                    <strong>Website:</strong>
                                    https://ahcenterbd.com
                                </p>

                                <p style="margin:8px 0;color:#555;">
                                    <strong>Email:</strong>
                                    contact@ahcenterbd.com
                                </p>

                                <p style="margin:8px 0;color:#555;">
                                    <strong>Phone:</strong>
                                    +880 1712503159
                                </p>

                            </div>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#0f172a;color:#cbd5e1;padding:20px;">

                            <p style="margin:0;font-size:13px;">
                                © {{ date('Y') }} Advanced Hernia Center Bangladesh
                            </p>

                            <p style="margin-top:8px;font-size:12px;">
                                Excellence in Hernia Care, Advanced Surgery & Patient Support
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

</body>

</html>