   @if (session('message'))
    <p class="message">{{ session('message') }}</p>  
@else
    <p class="red">Data not submitted</p>
@endif

<style>
      .message {
            display: flex;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: green;
            background: lightblue;
            width: 26%;
            border-radius: 10px;
           margin-left: 40px;
        }
        .red{
            display: flex;
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color:red;
            background: orange;
            background: lightblue;
            width: 26%;
            border-radius: 10px;
           margin-left: 40px;
        }
</style>