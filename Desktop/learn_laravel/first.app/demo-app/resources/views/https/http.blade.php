<form action="/login" method="post">
    @csrf
     <input type="text" name="fullname"placeholder="enter your name">
     <br>
     <input type="text"name="password"placeholder="enter password">
     <br>
     <input type="submit"value="submit">
</form>