<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f5f7; font-family: Arial, Helvetica, sans-serif; color: #1f2937;">
    <div style="display: none; max-height: 0; overflow: hidden; opacity: 0; mso-hide: all;">
        {{ $subjectLine ?? 'Notification' }}
    </div>

    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f3f5f7; margin: 0; padding: 32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 10px; overflow: hidden;">
                    <tr>
                        <td style="padding: 22px 24px 18px; background-color: #ffffff; border-bottom: 1px solid #eef2f7;">
                            <img
                                src="{{ asset('logo.png') }}"
                                alt="h.m.revc"
                                width="140"
                                style="display: block; max-width: 140px; height: auto; border: 0;"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 28px 24px 18px;">
                            <div style="font-size: 11px; line-height: 1.4; letter-spacing: 0.12em; text-transform: uppercase; color: #6b7280; margin: 0 0 12px;">
                                Notification
                            </div>
                            <h1 style="margin: 0 0 16px; font-size: 28px; line-height: 1.3; color: #111827; font-weight: 600;">
                                {{ $subjectLine ?? 'New update' }}
                            </h1>
                            <div style="font-size: 15px; line-height: 1.8; color: #4b5563; margin: 0;">
                                {!! nl2br(e($bodyMessage)) !!}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 24px 24px;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top: 1px solid #eef2f7; margin: 0;">
                                <tr>
                                    <td style="padding-top: 18px; font-size: 12px; line-height: 1.6; color: #6b7280;">
                                        &copy; {{ date('Y') }} h.m.revc. All rights reserved.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
