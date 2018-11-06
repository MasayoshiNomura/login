@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                        <nav>
                            <ul>
                                @can('system-only') {{-- システム管理者権限のみに表示される --}}
                                <li><a href="">機能１</a></li>
                                @elsecan('admin-higher')　{{-- 管理者権限以上に表示される --}}
                                <li><a href="">機能２</a></li>
                                <li><a href="">機能３</a></li>
                                @elsecan('user-higher') {{-- 一般権限以上に表示される --}}
                                <li><a href="">機能４</a></li>
                                <li><a href="">機能４</a></li>
                                <li><a href="">機能４</a></li>
                                <li><a href="">機能５</a></li>
                                @endcan
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
        <table class="table-bordered">
            <tr>
                <th>Employee Number</th>
                <th>Department</th>
                <th>Position</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Sexuality</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Skill</th>
                <th>Note</th>
            </tr>
            @foreach($employee as $item)
                <tr>
                    <td>{{ $item->employee_number }}</td>
                    <td>{{ $item->department }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->sexuality }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->tel }}</td>
                    <td>{{ $item->skill }}</td>
                    <td>{{ $item->note }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
