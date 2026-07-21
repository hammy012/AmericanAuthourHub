<!doctype html>
<html>
<head><meta charset="utf-8"></head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong><br/> {!! nl2br(e($contact->message)) !!}</p>

    <h3>Client Info</h3>
    <p><strong>IP:</strong> {{ $contact->ip_address }}</p>
    <p><strong>City / Region / Country:</strong> {{ $contact->city }} / {{ $contact->region }} / {{ $contact->country }} ({{ $contact->country_code }})</p>
    <p><strong>Latitude / Longitude:</strong> {{ $contact->lat }} , {{ $contact->lon }}</p>
    <p><strong>Timezone:</strong> {{ $contact->timezone }}</p>
    <p><strong>ISP:</strong> {{ $contact->isp }}</p>
    <p><strong>User Agent:</strong> <small>{{ $contact->user_agent }}</small></p>

    <p>Received at: {{ $contact->created_at }}</p>
</body>
</html>
