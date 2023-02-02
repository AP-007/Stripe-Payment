<style>
    .rectangle {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
        text-align: center;
    }
    
    .text{
        margin: auto;
        margin-top: 32px;
        width: 50%;
        padding: 10px;
        text-align: center;
    }
</style>

<div class="rectangle">
    <h1>Thanks for the coffee.</h1>
</div>

<div class="text">
    <a href="{{ route('coffee')}}">
        Buy Again
    </a>
</div>