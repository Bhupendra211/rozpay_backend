@extends('layouts.adminlayout')
@section('content')
    <div class="main-panel">
        <!-- Navbar -->
        @include('utilities.topNav')
        <!-- End Navbar -->


        <div class="content">
            <div class="container-fluid">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="font-weight: 600">Number</th>
                            <th scope="col" style="font-weight: 600">UserName</th>
                            <th scope="col" style="font-weight: 600">Email</th>
                            <th scope="col" style="font-weight: 600">Earn Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>Add Soon..</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>


        {{-- Footer --}}
        @include('utilities.footer')
        {{-- Footer End --}}
    @endsection
