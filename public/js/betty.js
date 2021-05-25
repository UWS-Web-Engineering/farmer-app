

// check item off checklist
$(document).ready(function() {
    $(document).on('click', '.b-query-response', function() {
        let response = $(this).data('response');
        let query_id = $(this).data('queryid');
        let url = 'api/query/'+query_id+'/reply';
        let object = '{ "queryID": '+ query_id +', "message":"", "answer":"'+ response +'"}';
        var answer = '';
        object = JSON.parse(object);
        // console.log(response);
        // console.log(url);
        console.log(object);

        if (response == "Y") {
            answer = '<div class="b-bubble"><div class="b-message">Yes</div></div><div class="b-date">10 APR, 7AM</div>';
        }
        
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