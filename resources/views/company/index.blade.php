@extends('layouts.extend')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">company</h4>
                    <div class="template-demo">
                        <button class="btn btn-primary btn-rounded btn-icon-text" onclick="location.href='{{ route('company.create') }}'" title="CREATE">
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
                                    <th>Image</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->title }}</td>
                                    <td> <a href="{{ $company->image }}" target="blank">{{ $company->image }} </a> </td>
                                    <td>
                                        <div class="grid-button">
                                            <div class="grid-button-item">
                                                <button class="btn btn-success btn-rounded btn-icon" onclick="location.href='{{ route('company.edit', $company->id) }}'" title="EDIT">
                                                    <i class="ti-file"></i>
                                                </button>
                                            </div>
                                            <div class="grid-button-item">
                                                <form action="{{ route('company.destroy', $company->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
