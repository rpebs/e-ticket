<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $data->id . '" data-original-title="Edit"
    class="edit btn btn-success btn-sm editKaryawan" title="verifikasi">
    <form action="/riwayat/{{ $data->id }}" class="d-inline" method="post">
        @method('put')
        @csrf
        <button class="btn btn-success btn-sm" onclick="return confirm('Are you sure?')">
            <i class="fas fa-user-check"></i>
        </button>
    </form>
</a>
