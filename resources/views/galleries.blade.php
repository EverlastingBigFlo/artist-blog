@extends('/layouts/layout')
{{-- @extends('/layouts/layout') --}}
<style>
    .gridWrapper{
    max-width: 80vw;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-auto-rows: minmax(100px, 200px);
    grid-gap: 30px;
    grid-template-areas:
        "box1 box1 box2 box2"
        "box1 box1 box2 box2"
        "box1 box1 box3 box3"
        "box4 box4 box4 box4"
        "box4 box4 box4 box4"
        "box5 box5 box6 box6";
    }

    .box1{
        background-color: green;
        grid-area: box1;
    }
    .box2{
        background-color: green;
        grid-area: box2;

    }
    .box3{
        background-color: green;
        grid-area: box3;

    }
    .box4{
        background-color: green;
        grid-area: box4;

    }
    .box5{
        background-color: green;
        grid-area: box5;
    }
    .box6{
        background-color: green;
        grid-area: box6;
    }
</style>


@section('content')
    
    <div class="subHeader">
        <p>
            Gallery
        </p>
    </div>

    <div class="gridWrapper">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
        <div class="box6"></div>
    </div>
   </div>
@endsection
