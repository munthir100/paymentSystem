@extends('dashboard.layouts.shared.app-layout')

@section('title')
@include("dashboard.layouts.shared.includes.title-meta", ["title" => __("Payments")])
@endsection

@section('page-title')
@include("dashboard.layouts.shared.includes.page-title", ["pagetitle" => __("Account"), "title" => __("Payments")])
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __("Marchant Details") }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th>{{ __("ID") }}</th>
                                <td>{{ $marchant->id }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Name") }}</th>
                                <td>{{ $marchant->name }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Identity Number") }}</th>
                                <td>{{ $marchant->identity_number }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Phone") }}</th>
                                <td>{{ $marchant->phone }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Address") }}</th>
                                <td>{{ $marchant->address }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("IBAN") }}</th>
                                <td>{{ $marchant->iban }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Email") }}</th>
                                <td>{{ $marchant->email }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Commercial Registration Number") }}</th>
                                <td>{{ $marchant->commercial_registration_number }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Commercial Registration File") }}</th>
                                <td>
                                    <a href="{{ $marchant->getFirstMediaUrl('commercial_registration_files') }}">
                                        {{__('View')}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __("Tax Number") }}</th>
                                <td>{{ $marchant->tax_number }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Tax File") }}</th>
                                <td>
                                    <a href="{{ $marchant->getFirstMediaUrl('tax_files') }}">
                                        {{__('View')}}
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection