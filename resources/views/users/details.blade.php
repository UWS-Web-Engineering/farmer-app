@extends ('layout')

@section('content')
	<form name="detailsForm" class="a-container a-flex a-flex-column a-justify-content-center">
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
		<input type="email" name="farmerEmail" required placeholder="Email Address" class="a-text-field a-mb" />
		<input type="text" name="farmerName" required placeholder="Name" class="a-text-field a-mb" />
    	<input type="phone" name="farmerPhone" required placeholder="Phone Number" class="a-text-field a-mb" />
    	<input type="text" name="farmerAddr" required placeholder="Address" class="a-text-field a-mb" />
		<input type="submit" name="submitBtn" value="SUBMIT" class="a-btn a-ml-auto a-mt a-mb--xl a-align-self-end" />
	</form>
	
	<script>
		// Read farmerID from URL
		const urlParams = new URLSearchParams(window.location.search);
		const farmerID = urlParams.get('farmerID');
		// Define form variable
		let form = document.forms['detailsForm'];
		// Call submit function on form submission
		form.addEventListener("submit", submit);
		async function submit(e) {
			if (!farmerID) {
				alert("No farmer defined to the details for!")
				return void(0);
			}
			// Prevent default form submission
			e.preventDefault();

			// Check if the form is valid
			if (form.checkValidity()) {
				// Disable submit button
				form.submitBtn.disabled = true;
				form.submitBtn.value = "Please wait...";

				try {
					// Create from data from form
					const updatedFarmer = new FormData(form);
					// Send PATCH request to /farmers/id
					const updatedFarmerResponse = await axios.post(
						`/api/mock/farmers/${farmerID}`,
						updatedFarmer,
						{ params: { _method: 'PATCH' } });
					// Authenticate farmer
					farmer = new FormData();
					farmer.append('userName', updatedFarmerResponse.data.userName);
					farmer.append('password', updatedFarmerResponse.data.password);
					const authResponse = await axios.post('/api/mock/auth', farmer);
					// Set auth cookies
					Cookies.set('farmerID', authResponse.data.farmerID);
					Cookies.set('token', authResponse.data.token);
					// Redirect to /crops
					window.location.replace('/crops');
				} catch(e) {
					alert(e.message);
				} finally {
					// Enable submit button
					form.submitBtn.value = "SUBMIT"
					form.submitBtn.disabled = false
				}
			}
		}
	</script>
@endsection
