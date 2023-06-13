@extends('layouts.admin.main')
@section('main-container')
<div class="container mt-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $contact->first_name.' '.$contact->last_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->mobile }}</td>
                <td>
                    <a href="" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
      {!! $contacts->links() !!}
</div>    
@endsection