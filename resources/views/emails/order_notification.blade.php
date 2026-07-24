<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Order Received</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e1e8ed;
        }
        .header {
            background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .header p {
            margin: 5px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .content {
            padding: 30px 25px;
        }
        .section-title {
            font-size: 16px;
            font-weight: 700;
            color: #002768;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 8px;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        .section-title:first-of-type {
            margin-top: 0;
        }
        .info-grid {
            width: 100%;
            border-collapse: collapse;
        }
        .info-grid td {
            padding: 10px 0;
            border-bottom: 1px solid #f8fafc;
            vertical-align: top;
        }
        .info-grid td.label {
            width: 35%;
            font-weight: 600;
            color: #64748b;
            font-size: 14px;
        }
        .info-grid td.value {
            color: #1e293b;
            font-size: 14px;
        }
        .price-tag {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 700;
            display: inline-block;
        }
        .notes-box {
            background-color: #f8fafc;
            border-left: 4px solid #9F0B07;
            padding: 15px;
            border-radius: 4px;
            font-style: italic;
            font-size: 13px;
            color: #475569;
            line-height: 1.5;
        }
        .footer {
            background-color: #f8fafc;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #94a3b8;
            border-top: 1px solid #e1e8ed;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Package Order Received!</h1>
            <p>American Author Hub - Online Payment Completed</p>
        </div>
        <div class="content">
            <div class="section-title">Customer Information</div>
            <table class="info-grid">
                <tr>
                    <td class="label">Name:</td>
                    <td class="value"><strong>{{ $details['client_name'] }}</strong></td>
                </tr>
                <tr>
                    <td class="label">Email Address:</td>
                    <td class="value"><a href="mailto:{{ $details['client_email'] }}">{{ $details['client_email'] }}</a></td>
                </tr>
                <tr>
                    <td class="label">Phone Number:</td>
                    <td class="value">{{ $details['client_phone'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <div class="section-title">Order Details</div>
            <table class="info-grid">
                <tr>
                    <td class="label">Package:</td>
                    <td class="value"><strong>{{ $details['package_name'] }}</strong></td>
                </tr>
                <tr>
                    <td class="label">Amount Paid:</td>
                    <td class="value"><span class="price-tag">${{ number_format($details['amount'], 2) }} USD</span></td>
                </tr>
            </table>

            <div class="section-title">Payment & Transaction Info</div>
            <table class="info-grid">
                <tr>
                    <td class="label">Stripe Charge ID:</td>
                    <td class="value"><code>{{ $details['charge_id'] }}</code></td>
                </tr>
                <tr>
                    <td class="label">Date & Time:</td>
                    <td class="value">{{ $details['created_at'] }}</td>
                </tr>
                @if(isset($details['ip_address']))
                <tr>
                    <td class="label">Client IP:</td>
                    <td class="value">{{ $details['ip_address'] }}</td>
                </tr>
                @endif
            </table>

            @if(!empty($details['project_notes']))
                <div class="section-title">Client Instructions / Notes</div>
                <div class="notes-box">
                    {!! nl2br(e($details['project_notes'])) !!}
                </div>
            @endif
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} American Author Hub. All rights reserved.<br>
            This is an automated notification for a completed online payment.
        </div>
    </div>
</body>
</html>
