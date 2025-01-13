<h1>user return is succesfully</h1>
<div>
    {{session("user")}}
    @if (session("user"))
        <h1>welcome {{session("user")}}</h1>        
        @else
        <h2>user not found <a href="logins">Login again</a></h2>
    @endif
    <a href="logout">Logout now</a>
     <p>{{ session("allData")["password"]}}</p>
       
     @if(session("allData")["password"])
     @include("https.http");
     @else
     <h1>https method not have</h1>
     @endif
</div>