<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,600);
    .container{
    padding: 20px;
    }
    body{
    background-color: #f6f4f4;
    font-family: 'Raleway', sans-serif;
    }
    .teal{
    background-color: #ffc952 !important;
    color: #444444 !important;
    }
    a{
    color: #47b8e0 !important;
    }
    .message{
    text-align: left;
    }
    .price1{
        font-size: 40px;
        font-weight: 200;
        display: block;
        text-align: center;
    }
    .ui.message p {margin: 5px;}
</style>

<div class="container"><style>
    body {
    text-align: center;
    padding: 40px 0;
    background: #EBF0F5;
    }
    h1 {
        color: #c33;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }
    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
    }
    i {
    color: #c33;
    font-size: 100px;
    line-height: 200px;
    margin-left:-15px;
    }
    .card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
    }

    .back a {
        text-decoration: none;
        color: #fff!important;
        float: right;
    }

    .btn {
        background: #c33;
        padding: 12px 40px;
        color: #fff;
        font-size: 18px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        text-transform: capitalize;
        display: inline-block;
        border: 1px solid transparent;
        border-radius: 7px;
        transition: 0.3s;
    }
</style>

    <div class="container">
        <div class="card">
            <div style="border-radius:200px; height:200px; width:200px; background: #e8e5e5; margin:0 auto;">
                <i class="checkmark">✗</i>
            </div>
                <h1>Fail</h1> 
                <p>Purchase Fail!<br/> check your entry carefully!</p>
        </div>

        <div class="back">
            <a href="{{ route('home') }}" class="btn"></i>
                Back
            </a>
        </div>
    </div>