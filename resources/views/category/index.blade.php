@extends('layouts.extend')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CATEGORY</h4>
                    <div class="template-demo">
                        <button class="btn btn-primary btn-rounded btn-icon-text" onclick="location.href='{{ route('category.create') }}'" title="CREATE">
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
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>
                                        <div class="grid-button">
                                            <div class="grid-button-item">
                                                <button class="btn btn-success btn-rounded btn-icon" onclick="location.href='{{ route('category.edit', $category->id) }}'" title="EDIT">
                                                    <i class="ti-file"></i>
                                                </button>
                                            </div>
                                            <div class="grid-button-item">
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-rounded btn-icon" title="DELETE">
                                                        <i class="ti-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mt-3">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
