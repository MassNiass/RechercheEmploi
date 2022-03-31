@extends("layouts.template",[
    "title"=>"Index"
]
)

@section("content")

<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h1-large">PLAN<br> DESIGN<br> DEVELOP</h1>
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="button-container">
                    <a class="btn-solid-lg" href="{{route('employer.login')}}">Employer</a>
                    <a class="btn-outline-lg" href="{{route('entreprise.login')}}">Entreprise</a>
                </div> <!-- end of button-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->

@endsection
