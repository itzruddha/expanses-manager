@extends('layouts.web')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Notes</h3>
                  </div>
                  <div class="py-3 card-body border-bottom">
                    <div class="d-flex">
                      <div class="text-secondary">
                        Show
                        <div class="mx-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" value="{{ $notebooks->perPage() }}" size="3" aria-label="Invoices count">
                        </div>
                        entries
                      </div>
                      <div class="ms-auto text-secondary">
                        Search:
                        <div class="ms-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1"><input class="m-0 align-middle form-check-input" type="checkbox" aria-label="Select all invoices"></th>
                          
                          <th>Title</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Date</th>
                          
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($notebooks as $notebook)
                        <tr>
                          <td><input class="m-0 align-middle form-check-input" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">{{$notebook->title}}</span></td>
                          <td>{{$notebook->type}}</td>
                          <td>{{$notebook->amount}}</td>
                          <td>{{$notebook->date}}</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="align-text-top btn dropdown-toggle" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="{{ route('notes.edit', $notebook) }}">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    {{ $notebooks->links() }}
                    {{-- <p class="m-0 text-secondary">Showing <span>{{ $notebooks->firstItem() }}</span> to <span>{{ $notebooks->lastItem() }}</span> of <span>{{ $notebooks->total() }}</span> entries</p>
                    <ul class="m-0 pagination ms-auto">
                      
                    </ul> --}}
                  </div>
                </div>
              </div>

            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
