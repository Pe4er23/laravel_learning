<div>
    <table>
        @foreach($nameArr as $name)
            <tr>
                <td>{{$name['name']}}</td>
                <td>{{$name['age']}}</td>
            </tr>
        @endforeach
    </table>
</div>
