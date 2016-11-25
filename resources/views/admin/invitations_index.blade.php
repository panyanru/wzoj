@extends ('admin.layout')

@section ('title')
invitations
@endsection

@section ('content')

@foreach ($invitations as $invitation)
<p><a href='/admin/invitations/{{$invitation->id}}'>{{$invitation->description}}</a></p>
@endforeach

<form method='POST'>
{{csrf_field()}}
<button>new</button>
</form>

@endsection
