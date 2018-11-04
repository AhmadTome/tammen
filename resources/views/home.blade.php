@extends('layouts.app')

@section('content')
@endsection
<script>
    $(document).ready(function () {
        window.location = '{{ url("/addpersonalInformation")}}';
    })
</script>
