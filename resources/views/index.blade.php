@extends('header')
@section('content')
    <div class="container">
        <div class="mt-5 float-start">
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add
            </button> --}}
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('store') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="btn-close" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="showdiv"></div>
        </div>
    </div>
    <script>
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
        $('#btn-store').on('click', function(e) {
            e.preventDefault();
            let name = $("#name").val();
            $.ajax({
                method: "POST",
                url: "{{ route('store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name
                },
                success: function(response) {
                    if(response.code == 200){
                        $("#name").val("");
                        $("#btn-close").click();
                        ajaxCall();
                        
                    }
                }
            });
        });
    </script>
@endsection
