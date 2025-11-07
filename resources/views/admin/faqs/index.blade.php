@extends('admin.layouts.app')

@section('title', 'FAQs')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="card-title">FAQs</h4>
                        <a class="btn btn-primary" href="{{ route('admin.add-new-faq') }}">Add FAQ</a>
                    </div>

                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="ps-3">#</th>
                                    {{--  <th>Topic</th>  --}}
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $index => $faq)
                                <tr>
                                    <td class="ps-3">{{ $faqs->firstItem() + $index }}</td>
                                    {{--  <td>{{ $faq->topic ?? '-' }}</td>  --}}
                                    <td>{{ Str::limit($faq->question, 60) }}</td>
                                    <td>{!! Str::limit(strip_tags($faq->answer), 80) !!}</td>
                                    <td>
                                        @if($faq->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.faq-edit', ['id' => $faq->id]) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>

                                        <form action="{{ route('admin.faq-delete', ['id' => $faq->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $faqs->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
