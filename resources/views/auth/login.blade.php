<form method="post" action="{{ route('login.post') }}">
    @csrf

    <input name="name" type="text">
    <input name="password" type="password">

    @if($errors->any())
        <span>{{ $errors->first() }}</span>
    @endif

    <input type="submit">
</form>
