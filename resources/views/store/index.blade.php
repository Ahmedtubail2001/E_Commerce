@extends('layouts.index')

@section('titelPage', 'Index')

@section('content')
    <style>
        #example0 {
            margin-bottom: 590px;
            display: block;
        }
    </style>
    <table id="example0" class="table display dataTable" role="grid" aria-describedby="example0_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Id
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Name
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">
                    Address
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Logo
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                    aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->address }}</td>
                    <td><img style="width: 100px; height: 70px;" src="{{ asset('images/' . $store->logo) }}"></td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('store.edit', $store->id) }}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a>
                                <form method="POST" action="{{ route('store.destroy', $store->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" action="">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
