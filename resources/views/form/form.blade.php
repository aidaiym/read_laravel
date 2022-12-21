@extends('layouts.app')
@section('content')
<main>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <button class="btn btn-primary" onclick="sendData()">Import File</button>
</main>
<script>
    function sendData() {
        //   data =   form_array.push(transmission_array);
        var data = [
            1,
            2,
            3
        ];
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

        $.ajax({
            url: '/test',
            type: 'POST',
            dataType: 'json',
            contentType: 'json',
            data: JSON.stringify(data),
            contentType: 'application/json; charset=utf-8',
        });
    }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
