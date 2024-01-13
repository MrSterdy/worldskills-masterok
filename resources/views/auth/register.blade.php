<form method="post" action="{{ route('register.post') }}">
    @csrf

    <input name="first_name" type="text">
    <input name="last_name" type="text">
    <input name="middle_name" type="text">
    <input name="email" type="email">
    <input name="name" type="text">
    <input name="password" type="password">
    <input name="password_confirmation" type="password">

    @if($errors->any())
        <span>{{ $errors->first() }}</span>
    @endif

    <input type="submit">
</form>
