
@foreach($user as $val)
<tr >

    <td>{{$val->id}}</td>
    <td>{{$val->name}}</td>
    <td>{{$val->email}}</td>

</tr>

@endforeach
