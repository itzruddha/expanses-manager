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
                    <h3 class="card-title">Notebooks</h3>
                  </div>
                  <div class="py-3 card-body border-bottom">
                    <div class="d-flex">
                      <div class="text-secondary">
                        Show
                        <div class="mx-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
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
                          <td>
                            {{$notebook->amount}}
                          </td>
                          <td>
                            {{$notebook->date}}
                          </td>
                          
                          
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="align-text-top btn dropdown-toggle" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end" style="">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                          
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="m-0 pagination ms-auto">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                          prev
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
        </div>
      </div>
    </div>
  </div>


@endsection