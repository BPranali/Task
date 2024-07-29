<div class="container-fluid">
<h1>Admin Dashboard</h1>

{{-- <a href="{{route('addcustomer')}}">Add customer</a> --}}


<div class="container-fluid">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">password</th>
            <th scope="col">gender</th>
            <th scope="col">address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($customer as $customers)
                
            <tr>
              <th scope="row">{{$customers->id}}</th>
              <td>{{$customers->name}}</td>
              <td>{{$customers->mobile}}</td>
              <td>{{$customers->email}}</td>
              <td>{{$customers->password}}</td>
              <td>{{$customers->gender}}</td>
              <td>{{$customers->address}}</td>
              <td><a href="{{ route('editcustomer',['customer_id' => $customers->id])}}">Edit<br>
                    <a href="" wire:click.prevent="deleteCustomer({{$customers->id}})">Delete
              </td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
</div>
</div>

