// Query Responses
$(document).ready(function() {
    $(document).on('click', '.b-query-response', function() {
        var response = $(this).data('response');
        var query_id = $(this).data('queryid');
        var url = 'api/farmermessage';
        var answer = '';
        var object = {queryID: query_id, farmerMessage: response};

        // Hide ask buttons once ask help submit button is clicked
        $('.b-query-response').hide();

        // Set displays depending on response
        if (response == "Yes") {
            answer = '<div><div class="b-bubble"><div class="b-message">Yes</div></div></div>';
            console.log(object);
        } else if (response == "No") {
            answer = '<div><div class="b-bubble"><div class="b-message">No</div></div></div>';
            console.log(object);
        } else {
            $('.b-msg-textbox').addClass('display');
        }

        // Run ajax command if response is either yes or no
        if (response != "Ask") {
            $.ajax({
                type:"POST",
                url: url,
                headers: {'Authorization':Cookies.get('token')},
                data: {
                    query: object
                },
                success: function(data){
                    $('.b-msg-right').append(answer);
                },
                error: function(data){
                    $('.b-msg-right').append(answer); // Delete this line once connected to backend
                    console.log('Error');
                }
            })
        }
    })
});

// Ask Help
$(document).ready(function() {
    $(document).on('click', '.b-ask-response', function() {
        var response = $('textarea#askHelp').val();
        var query_id = $(this).data('queryid');
        var url = 'api/farmermessage';
        var object = {queryID: query_id, farmerMessage: response};
        var answer = '<div><div class="b-bubble"><div class="b-message">'+response+'</div></div></div>';
        console.log(object);

        // Hide textbox upon clicking submit
        $('.b-msg-textbox').removeClass('display');

        // Send POST request
        $.ajax({
            type:"POST",
            url: url,
            headers: {'Authorization':Cookies.get('token')},
            data: {
                query: object
            },
            success: function(data){
                $('.b-msg-right').append(answer);
            },
            error: function(data){
                $('.b-msg-right').append(answer); // Delete this line once connected to backend
                console.log('Error');
            }
        })
    })
});

// Request Responses
$(document).ready(function() {
    $(document).on('click', '.b-req-response', function() {
        var response = $(this).data('response');
        var request_id = $(this).data('requestid');
        var url = 'api/farmeroffer';
        var object = {requestID: request_id, farmerResponse: response};
        var answer = '';

        // Hide ask buttons once ask help submit button is clicked
        $('.b-req-response').hide();

        // Set displays depending on response
        if (response == "Accept") {        
            answer = '<div><div class="b-bubble"><div class="b-message">I accept this offer. Please send contract and 40% deposit.</div></div></div>';
            console.log(object);
        } else if (response == "Reject") {
            answer = '<div><div class="b-bubble"><div class="b-message">I decline this offer.</div></div></div>';
            console.log(object);
        } else {
            $('.b-msg-textbox').addClass('display');
        }

        // Run ajax command if response is either yes or no
        if (response != "Counter") {
            $.ajax({
                type:"POST",
                url: url,
                headers: {'Authorization':Cookies.get('token')},
                data: {
                    query: object
                },
                success: function(data){
                    $('.b-msg-right').append(answer);
                },
                error: function(data){
                    $('.b-msg-right').append(answer); // Delete this line once connected to backend
                    console.log('Error');
                }
            })
        }
    })
});

// Counter Offer
$(document).ready(function() {
    $(document).on('click', '.b-counter-response', function() {
        var weight = $('textarea#weight').val();
        var price = $('textarea#price').val();
        var date = $('textarea#date').val();
        
        var request_id = $(this).data('requestid');
        var url = 'api/farmeroffer';
        var object = {requestID: request_id, farmerResponse: 'Counter', weight:weight, price:price, fulfillDate:date};
        var answer = '<div><div class="b-bubble"><div class="b-message">I would like to make a counter offer. Weight: '+weight+'. Price: '+price+'. Fulfilment Date: '+date+'.</div></div></div>';
        console.log(object);

        // Hide textbox upon clicking submit
        $('.b-msg-textbox').removeClass('display');

        // Send POST request
        $.ajax({
            type:"POST",
            url: url,
            headers: {'Authorization':Cookies.get('token')},
            data: {
                offer: object
            },
            success: function(data){
                $('.b-msg-right').append(answer);
            },
            error: function(data){
                $('.b-msg-right').append(answer); // Delete this line once connected to backend
                console.log('Error');
            }
        })
    })
});