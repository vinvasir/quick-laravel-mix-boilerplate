@extends('layout')


@section('content')
<notification></notification>
<post-form>
	{{ csrf_field() }}
</post-form>
@endsection