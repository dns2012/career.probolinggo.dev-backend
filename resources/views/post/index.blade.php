@extends('layouts.extend')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">POST</h4>
                    <div class="template-demo">
                        <button class="btn btn-primary btn-rounded btn-icon-text" onclick="location.href='{{ route('post.create') }}'" title="CREATE">
                            <i class="ti-plus btn-icon-prepend"></i>
                            CREATE
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Company</th>
                                    <th>Created At</th>
                                    @if (Auth::user()->role == 1)
                                    <th></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->title }}</td>
                                    <td>{{ $post->company->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    @if (Auth::user()->role == 1)
                                    <td>
                                        <div class="grid-button">
                                            <div class="grid-button-item">
                                                <button class="btn btn-success btn-rounded btn-icon" onclick="location.href='{{ route('post.edit', $post->id) }}'" title="EDIT">
                                                    <i class="ti-file"></i>
                                                </button>
                                            </div>
                                            <div class="grid-button-item">
                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-rounded btn-icon" title="DELETE">
                                                        <i class="ti-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mt-3">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
