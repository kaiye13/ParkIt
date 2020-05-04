<table class="table table-dark table-hover">
    <thead class="table-primary">
        <tr>
            <th scope="col">Lease</th>
            <th scope="col">Date</th>
            <th scope="col">Start time</th>
            <th scope="col">End time</th>
            <th scope="col">Phone Number</th>
            <th scope="col">License Plate</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leases as $lease)
        <tr>
            <td>{{$lease->rentable->adress}}</td>
            <td>{{date("d-m-Y", strtotime($lease->rentable->date_of_hire))}}</td>
            <td>{{date("H:i", strtotime($lease->start_time))}}</td>
            <td>{{date("H:i", strtotime($lease->end_time))}}</td>
            <td>{{$lease->phone_nr}}</td>
            <td>{{$lease->license_plate}}</td>
            <td>
                <a class="btn btn-info btn-sm" href='/leases/{{ $lease->id }}'>Show</a>
                @if (Auth::user()->role==="admin" || $lease->user_id == Auth::id())
                <a class="btn btn-info btn-sm btn-warning" href='/leases/{{ $lease->id }}/edit'>Edit</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
