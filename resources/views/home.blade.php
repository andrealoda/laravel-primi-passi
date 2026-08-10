@extends('layouts.app')

@section('content')
<h1>Homepage</h1>

<p>
    {{ $informazioni }}
</p>
<div class="btn">
    <a href="/second-page">Vai alla pagina 2</a>
</div>
<div class="btn">
    <a href="/third-page">Vai alla pagina 3</a>
</div>
<div class="btn">
    <a href="/fourth-page">Vai alla pagina 4</a>
</div>
<div class="btn">
    <a href="/fifth-page">Vai alla pagina 5</a>
</div>
@endsection