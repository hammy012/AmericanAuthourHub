@extends('admin.layouts.app')

@section('title', 'View Contact')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">View Contact</h1>
                <a href="{{ route('admin.contact-list') }}" class="btn btn-secondary">Back to list</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5>Contact Details</h5>
                    <table class="table table-borderless">
                        <tr><th>Name</th><td>{{ $contact->name }}</td></tr>
                        <tr><th>Email</th><td>{{ $contact->email }}</td></tr>
                        <tr><th>Phone</th><td>{{ $contact->phone }}</td></tr>
                        <tr><th>Message</th><td>{!! nl2br(e($contact->message)) !!}</td></tr>
                    </table>

                    <h5 class="mt-4">Client Info</h5>
                    <table class="table table-borderless">
                        <tr><th>IP Address</th><td>{{ $contact->ip_address ?? '-' }}</td></tr>
                        <tr><th>City</th><td>{{ $contact->city ?? '-' }}</td></tr>
                        <tr><th>Region</th><td>{{ $contact->region ?? '-' }}</td></tr>
                        <tr><th>Country</th><td>{{ $contact->country ?? '-' }} ({{ $contact->country_code ?? '' }})</td></tr>
                        <tr><th>Latitude / Longitude</th><td>{{ $contact->lat ?? '-' }} , {{ $contact->lon ?? '-' }}</td></tr>
                        <tr><th>Timezone</th><td>{{ $contact->timezone ?? '-' }}</td></tr>
                        <tr><th>ISP</th><td>{{ $contact->isp ?? '-' }}</td></tr>
                        <tr><th>User Agent</th><td><small>{{ $contact->user_agent }}</small></td></tr>
                        <tr><th>Received At</th><td>{{ $contact->created_at->format('d M Y, h:i A') }}</td></tr>
                    </table>

                    <div class="mt-3">
                        <form action="{{ route('admin.contact-delete', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this message?')" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('admin.contact-list') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
