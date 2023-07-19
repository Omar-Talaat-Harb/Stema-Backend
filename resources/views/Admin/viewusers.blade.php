@extends('Admin.layouts.app')
@section('content')

<section class="view">
    <div class="myhead">
        <h2 style="margin-right:60%;">View Users</h2>
        <a href="{{ route('user.create') }}"><button>
                <h5> Add User</h5>
            </button></a>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <!-- <tr>
                    <th scope="col">No.</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Created at</th>
                    <th scope="col">User Group</th>
                    </tr> -->
                    <tr>
                        <button class="headline" style="position: relative; top:80px;">No.<th scope="col"></th></button>
                        <button class="headline" style="position: relative; top:80px;margin-left:-3%">File name<th scope="col"></th>
                            </button>
                        <button class="headline" style="margin-left:4%; position: relative; top:80px;">Created By<th
                                scope="col"></th></button>
                        <button class="headline" style="margin-left:8%; position: relative; top:80px;">Last modified<th
                                scope="col"></th></button>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num=1;
                    @endphp
                    @foreach($users as $user )
                        <tr class="deleteDiv{{ $user->id }}">
                            <th scope="row">{{ $num }}</th>
                            <td><a href="{{ route('user.show',$user->id) }}">{{ $user->firstname }}
                                    {{ $user->lastname }}</a></td>
                            <td>{{ $user->role->type }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td> <a href="{{ route('user.edit',$user->id) }}"> <i
                                        class="fas fa-pencil-alt"></i></td></a>

                            <td><a href="#" class="userId"  onclick="loadDeleteModal({{ $user->id }}, `{{ $user->firstname }}`)" ><i class="fas fa-trash"></i></a></td>
                            @php
                                $num+=1;
                            @endphp
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteCategory" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="deleteCategory" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you sure you want to delete <span id="modal-category_name"></span>?
                        <input type="hidden" id="category" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-white" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="modal-confirm_delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

</section>
<script>

    function loadDeleteModal(id, name) {
        $('#modal-category_name').html(name);
        $('#modal-confirm_delete').attr('onclick', `confirmDelete(${id})`);
        $('#deleteCategory').modal('show');
    }

    function confirmDelete(id) {
        $.ajax({
            url: '{{ url('admin/user') }}/' + id,
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                '_token':"{{csrf_token()}}",
                '_method': 'delete',
            },
            success: function (data) {
                // Success logic goes here..!

            $('#deleteCategory').modal('hide');
            $('.deleteDiv'+ id).remove();
            },
            error: function (error) {
                // Error logic goes here..!
            }
        });
    }

</script>

{{-- <script>
    $(document).ready(function () {
        $(document).on("click",".userId", function (e)
        {
            e.preventDefault();
            console.log("hi");
            var id = $(e.relatedTarget).data('target-id');
            $('#pass_id').val(id);
        });
    });

</script> --}}

@endsection
