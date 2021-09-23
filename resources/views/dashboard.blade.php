@extends('base')

@section('content')
    <style>
      body {
        background-color: azure;
      }
      h1, .welcome {
        text-align: center;
      }
      h1 {
        padding-top: 20px;
      }
    </style>
<body>
    <div>

        <header class="container"> 
            <h1><b>MY BLOG</b></h1>
            <p class="welcome">Welcome to my Website</p>
        </header>

        <div class="row">

        <div>

        <div>
            <div class="container">
                <h3><b>ABOUT ME</b></h3>
            </div>

        <div class="container">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, cupiditate repudiandae rem ipsum magnam at fugiat enim! Reiciendis inventore vel veritatis numquam labore, vitae, itaque saepe autem aliquid deserunt praesentium!</p>
    </div>
</div>
<hr>

<div>
    <div class="container">
        <h3><b>DESCRIPTION</b></h3>
    </div>

    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa a corporis suscipit eum, cupiditate omnis totam quidem, ad quisquam repellat et quae provident rem! Magni fugiat sequi porro perspiciatis nulla.</p>
    </div>
</div>
</div>
<hr>

<div>
  <div>
    <div class="container">
      <h4><b>SCHOOL ATTENDED</b></h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quasi esse commodi odio veniam ut odit a, facilis accusamus, neque voluptas hic nulla suscipit aperiam magni vitae tempora aliquam qui.</p>
    </div>
  </div><hr>
  
  <div>
    <div class="container">
      <h4>Parents</h4>
    </div>
    <ul>
      <li>
        <span><b>Father</b></span><br>
        <span>Ruel A. Talatagod</span>
      </li>
      <li>
        <span><b>Mother</b></span><br>
        <span>Jeana D. Talatagod</span>
      </li>
    </ul>
  </div>
</div>
</div><br>
</div>
</body>
</html>
@endsection