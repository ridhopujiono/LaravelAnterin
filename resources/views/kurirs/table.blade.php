<div class="table-responsive-sm">
    <table class="table table-striped" id="kurirs-table">
        <thead>
            <tr>
                <th>Nama Kurir</th>
                <th>Jenis</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kurirs as $kurir)
                <tr>
                    <td>{{ $kurir->nama_kurir }}</td>
                    <td>{{ $kurir->jenis }}</td>
                    <td><img src="{{ asset($kurir->foto) }}" alt="" width="100px"></td>
                    <td>
                        {!! Form::open(['route' => ['kurirs.destroy', $kurir->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('kurirs.show', [$kurir->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('kurirs.edit', [$kurir->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-ghost-danger',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
