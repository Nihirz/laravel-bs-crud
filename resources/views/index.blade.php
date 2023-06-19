@extends('header')
@section('content')
    <div class="container">
        <div class="float-end">
            <a href="{{ route('category.export') }}" class="btn btn-sm btn-primary">Export</a>
        </div>
        <div class="mt-5">
            <div class="showdiv"></div>
        </div>
    </div>
    <script>
        // Ajax call for render table
        function ajaxCall() {
            $.ajax({
                url: window.location.href,
                method: "GET",
                data: {},
                success: function(response) {
                    $(".showdiv").html("");
                    $(".showdiv").html(response);
                }
            });
        }
        ajaxCall();
        // $('#btn-store').on('click', function(e) {
        //     e.preventDefault();
        //     let name = $("#name").val();
        //     $.ajax({
        //         method: "POST",
        //         url: "{{ route('store') }}",
        //         data: {
        //             "_token": "{{ csrf_token() }}",
        //             "name": name
        //         },
        //         success: function(response) {
        //             if(response.code == 200){
        //                 $("#name").val("");
        //                 $("#btn-close").click();
        //                 ajaxCall();

        //             }
        //         }
        //     });
        // });
    </script>
@endsection
