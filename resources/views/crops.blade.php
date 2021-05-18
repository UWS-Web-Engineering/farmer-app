@extends ('layout')

@section('topnav')
	<div class="clearfix b-topnav">
		<div class="b-row">
			<div class="b-col-6">
				<a href="#">
					<div class="b-logo">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M64 96H0c0 123.7 100.3 224 224 224v144c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320C288 196.3 187.7 96 64 96zm384-64c-84.2 0-157.4 46.5-195.7 115.2 27.7 30.2 48.2 66.9 59 107.6C424 243.1 512 147.9 512 32h-64z"/></svg>
						<div class="b-logo-name b-heading  b-heading-text">
							FARMER APP
						</div>
					</div>
				</a>
			</div>
			<div class="b-col-6 b-right b-heading b-title b-heading-text">
				CROPS
			</div>
		</div>
	</div>
@endsection

@section('content')
<div class="b-nav-spacer"></div>
<!-- Header -->

<!-- Photo Grid -->

<!-- <ul class="iconlist">
<li class="pdf"><a href="#">Milk</a></li>
<li class="text"><a href="#">Eggs</a></li>
<li class="htm"><a href="#">Cheese</a></li>
<li class="doc"><a href="#">Vegetables</a></li>
<li class="text"><a href="#">Fruit</a></li>
</ul> -->


<div class="p-row"> 
  <div class="p-column">
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Carrot 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Lettuce 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Beans 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Avocado 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Orange 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Apple 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Banana 
            </div>
        </a>
    </li>
  </div>
  <div class="p-column">
  <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Carrot 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Spinach 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Carrot 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Radish 
            </div>
        </a>
    </li>
    <li class="pdf">
        <a href="/clients">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Carrots.JPG">    
             <div class="crop-details"> 
                Squash 
            </div>
        </a>
    </li>
  </div>  

  <div class="b-nav-spacer"></div>
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
// Declare a loop variable
var i;

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>

@endsection
@section('bottomnav')
    @include('bottomnav');
@endsection