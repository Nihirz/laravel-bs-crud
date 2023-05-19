<div class="row mt-5 pt-5 p-4">
    <div class="col-lg-8">
        <table class="table table-primary">
            <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $cat)
        <tr>
            <th scope="row">{{ $cat->id }}</th>
            <td>{{ $cat->name }}</td>
            <td>
                <button type="button" data-url="{{ route('edit', $cat->id) }}" data-id="{{ $cat->id }}"
                    class="btn btn-success btn-sm">Edit</button>
                    <button type="button" data-url="{{ route('delete', $cat->id) }}" data-id="{{ $cat->id }}"
                        class="deleteBtn btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center">No data found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-lg-4">
        <form action="">
            @csrf
            <input type="hidden" name="id" id="id" >
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="editname" class="form-control">
            </div>
            <div class="form-group mt-3">
                <div class="float-end">
                    <button id="btn-update" class="btn btn-info btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(".btn-danger").on('click', function() {
        let url = $(this).data('url');
        let id = $(this).data('id');
        $.ajax({
            method: "GET",
            url: url,
            data: {
                'id': id,
            },
            success: function(data) {
                if (data.code == 200) {
                    ajaxCall();
                }
            }
        });
    });
    $(".btn-success").on('click', function() {
        let url = $(this).data('url');
        let id = $(this).data('id');
        $.ajax({
            method: "GET",
            url: url,
            data: {
                'id': id,
            },
            success: function(data) {
                $("#id").val(data.data.id);
                $("#editname").val(data.data.name);
            }
        });
    });
    $('#btn-update').on('click', function(e) {
        e.preventDefault();
        let name = $("#editname").val();
        let id = $("#id").val();
        $.ajax({
            method: "POST",
            url: "{{ route('store') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name,
                "id": id,
            },
            success: function(response) {
                if(response.code == 200){
                    $("#editname").val("");
                    ajaxCall();
                    
                }
            }
        });
    });

</script>
