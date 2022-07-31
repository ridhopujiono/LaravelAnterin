<!-- Nama Kurir Field -->
<div class="form-group">
    {!! Form::label('nama_kurir', 'Nama Kurir:') !!}
    <p>{{ $kurir->nama_kurir }}</p>
</div>

<!-- Jenis Field -->
<div class="form-group">
    {!! Form::label('jenis', 'Jenis:') !!}
    <p>{{ $kurir->jenis }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($kurir->foto) }}" class="img-fluid rounded-top" alt="" width="200px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kurir->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kurir->updated_at }}</p>
</div>
