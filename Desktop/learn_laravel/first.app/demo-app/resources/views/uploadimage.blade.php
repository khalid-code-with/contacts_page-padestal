<h1>list show your all images on the screen</h1>
<a href="uploadimage">upload more images</a><br><br>

@foreach ( $imageData as $img )
    <img src="{{url('storage/'.$img->path)}}" alt="" srcset="" style="width: 150px; margin: 10px; max-width: 100%;">
@endforeach

<div class="div">
    <p>your all images upload successfully</p>
</div>

<style>
.div {
    width: 100%;
    height: 20%;
    position: absolute;
    margin-bottom: 0px;
    color: #ffffff;
    background: orange;
    padding: 2vh;
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    bottom: 0;
}

a {
    text-decoration: none;
    margin-left: 30px;
    font-size: 1em;
}

a:hover {
    color: white;
    background: black;
    padding: 3vh;
}

/* Responsive image size */
img {
    width: 100%;
    max-width: 150px; /* Keep the image size within 150px, but let it resize if needed */
    height: auto;
}

/* Responsive Design for small screen sizes */
@media (max-width: 768px) {
    .div {
        font-size: 0.8rem;
        padding: 4vh;
    }

    h1 {
        font-size: 1.5rem;
    }

    img {
        width: 100px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1.2rem;
    }

    .div {
        font-size: 0.7rem;
        padding: 5vh;
    }

    img {
        width: 80px;
    }
}
</style>
