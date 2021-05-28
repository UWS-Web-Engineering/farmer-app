@extends ('layout')

@section('content')
	<form name="registerForm" class="a-container a-flex a-flex-column a-justify-content-center">
	<svg  class="a-align-self-center" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.25 21.375H0C0 48.9176 22.3324
 71.25 49.875 71.25V103.312C49.875 105.272 
 51.4781 106.875 53.4375 106.875H60.5625C62.5219
  106.875 64.125 105.272 64.125 103.312V71.25C64.125 
  43.7074 41.7926 21.375 14.25 21.375ZM99.75 7.125C81.0023
   7.125 64.7039 17.4785 56.1762 32.775C62.3438 39.4992
    66.9082 47.6707 69.3129 56.7328C94.4062 54.1277 
	114 32.9309 114 7.125H99.75Z" fill="#65816B"
	/> 
</svg>

		
		<h1 class="a-align-selft-center a-text-center a-text-light a-mb--xl">FARMER APP</h1>
		{{ csrf_field() }}
		<input type="text" name="username" placeholder="Username" required class="a-text-field a-mb" />
		<input type="hidden" name="userRole" value="Farmer" />
		<input type="text" name="password" placeholder="Password" required class="a-text-field a-mb" />
		<input type="text" name="password_confirmation" placeholder="Confirm Password" required class="a-text-field a-mb" />
		<!-- <input type="number" name="regionId" placeholder="Region ID" required class="a-text-field a-mb" /> -->
		<input type="submit" name="submitBtn" value="Register" class="a-btn a-ml-auto a-mt a-mb--xl a-align-self-end" />

		<a href="/login" class="a-link a-text-light a-align-self-center a-mt--xl">Already have an account? <span class="a-primary--text a-text-bold">Log in</span></a>
	</form>

	<script>
		// Define form variable
		let form = document.forms['registerForm'];
		// Call register function on form submission
		form.addEventListener("submit", register);
		// Reset validity of password confirmation on change
		form.password_confirmation.addEventListener("change", function() {
			form.password_confirmation.setCustomValidity("");
		})
		async function register(e) {
			// Prevent default form submission
			e.preventDefault();
			
			// Check if password confirmation matches
			if (form.password.value != form.password_confirmation.value) {
				form.password_confirmation.setCustomValidity("Doesn't match with above!");
			}

			// Check if the form is valid
			if (form.checkValidity()) {
				// Disable submit button
				form.submitBtn.disabled = true;
				form.submitBtn.value = "Please wait...";
				try {
					// Create from data from form
					const farmer = new FormData(form);
					// Send POST request to backend
					const response = await axios.post('https://usercontroller.include.ninja/api/signup', farmer);
					// Set auth cookies
					Cookies.set('farmerID', response.data.user.id);
					Cookies.set('token', response.data.token);
					// Extract new farmer ID
					let farmerID = response.data.id;
					// Redirect to /details and pass farmerID
					window.location.replace(`details?farmerID=${farmerID}`);
				} catch(e) {
					alert(e.message);
				} finally {
					// Enable submit button
					form.submitBtn.value = "Register"
					form.submitBtn.disabled = false
				}
			}
		}
	</script>
@endsection
