<form action="{{ route('contact.store') }}" method="post">

    @csrf

    <label for="email">Email</label>
    <input type="email" name="email">
    <input type="submit" value="Submit">
</form>