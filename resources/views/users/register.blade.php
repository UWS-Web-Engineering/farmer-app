@extends ('layout')

@section('content')
	<div class="a-container a-flex a-flex-column a-justify-content-center">
		<img src="" class="a-align-self-center">
		<h1 class="a-align-selft-center a-text-center a-text-light a-mb--xl">FARMER APP</h1>
		<input type="text" placeholder="First Name" class="a-text-field a-mb" />
		<input type="text" placeholder="Last Name" class="a-text-field a-mb" />
		<input type="text" placeholder="Phone Number" class="a-text-field a-mb" />
		<a href="/crops" class="a-btn a-ml-auto a-mt a-mb--xl a-align-self-end">Register</a>
		<a href="/login" class="a-link a-text-light a-align-self-center a-mt--xl">Already have an account? <span class="a-primary--text a-text-bold">Log in</span></a>
	</div>
@endsection