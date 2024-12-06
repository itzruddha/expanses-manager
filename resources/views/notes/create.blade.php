@extends('layouts.web')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Notebook Create
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{route('note.store') }}"  class="card">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter your Title">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <select class="form-control" name="type">
                                                <option value="cr">Credit</option>
                                                <option value="dr">Debit</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <input type="number" class="form-control" name="amount"
                                                placeholder="Enter Amount">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    </div>
@endsection
