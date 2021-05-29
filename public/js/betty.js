// Query Responses
$(document).ready(function() {
    $(document).on('click', '.b-query-response', function() {
        var response = $(this).data('response');
        var query_id = $(this).data('queryid');
        var url = 'api/'+query_id+'/reply';
        var answer = '';
        var object = {queryID: query_id, farmerMessage: response};

        $('.b-query-response').hide();

        if (response == "Yes") {
            answer = '<div><div class="b-bubble"><div class="b-message">Yes</div></div></div>';
            console.log(object);
        } else if (response == "No") {
            answer = '<div><div class="b-bubble"><div class="b-message">No</div></div></div>';
            console.log(object);
        } else {
            $('.b-msg-textbox').addClass('display');
        }

        if (response != "Ask") {
            $.ajax({
                type:"POST",
                url: url,
                data: {
                    query: object,
                    _token: "{{csrf_token()}}"
                },
                success: function(data){
        
                },
                error: function(data){
                    // Move this to success
                    $('.b-msg-right').append(answer);
                    // console.log('test');
                    // $('.ajax-error').html('<div class="custom-alert">Error encountered. Please refresh the page.</div>').show().delay(2500).fadeOut(800);
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
        var url = 'api/'+query_id+'/reply';
        var object = {queryID: query_id, farmerMessage: response};
        var answer = '<div><div class="b-bubble"><div class="b-message">'+response+'</div></div></div>';
        console.log(object);
        $('.b-msg-textbox').removeClass('display');

        $.ajax({
            type:"POST",
            url: url,
            data: {
                query: object,
                _token: "{{csrf_token()}}"
            },
            success: function(data){
    
            },
            error: function(data){
                // Move this to success
                $('.b-msg-right').append(answer);
                // console.log('test');
                // $('.ajax-error').html('<div class="custom-alert">Error encountered. Please refresh the page.</div>').show().delay(2500).fadeOut(800);
            }
        })
    })
});
