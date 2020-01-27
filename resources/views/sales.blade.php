@extends('layouts.app')

@section('content')
  <div class="card chart-card">
    <div class="card-body pb-0">
      <h4 class="card-title font-weight-bold">Total Revenue</h4>
      <p class="card-text mb-4 current-date"></p>
      <div class="d-flex justify-content-between">
        <p class="display-4 align-self-end">&euro;{{$totalPrice}},-</p>
      </div>
    </div>
  </div>
  <div class="card chart-card">
    <div class="card-body pb-0">
      <h4 class="card-title font-weight-bold">Total Products sold</h4>
      <p class="card-text mb-4 current-date"></p>
      <div class="d-flex justify-content-between">
        <p class="display-4 align-self-end">{{$totalQuantity}}</p>
      </div>
    </div>
  </div>
    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th class="th-sm">Item</th>
          <th class="th-sm">Amount</th>
          <th class="th-sm">Value</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $key => $data)
          <tr>
            <td>{{ $key }}</td>
            <td>{{ $data[0] }} X </td>
            <td>&euro;{{ $data[1] * $data[0] }},-</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Item</th>
          <th>Amount</th>
          <th>Value</th>
        </tr>
      </tfoot>
    </table>
  <script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.querySelector('.current-date').innerHTML = m + "/" + d + "/" + y;
  </script>
@endsection
