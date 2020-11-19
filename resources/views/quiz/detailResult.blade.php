<table> 
    <thead>
        <tr>
            <th>name</th>
            <th>view</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{$student->usr}}</td>
            <td> <a href="{{url('/show'.$student->usr_id)}}">View</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
