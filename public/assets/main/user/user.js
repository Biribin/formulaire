/**
 * verification
 */
$('#submit').click(function()  // lorsque on click sur submit
{
    let name=$('#name').val();
    let email=$('#email').val();
    let address=$('#inputAddress').val();


    let city=$('#city').val();
    let state=$('#state').val();
    let zip=$('#zip').val();

    let comment=$('#comment').val();

    let agreeTerms= $('#agreeTerms');

    let commentLength= comment.length;

    if(email !="" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
        $('#email').removeClass('is-invalid');
        $('#email').addClass('is-valid');


        if(name !="" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(name)){
            $('#name').removeClass('is-invalid');
            $('#name').addClass('is-valid');

            if(address !="" && /^[#.0-9a-zA-Z\s,-]+$/.test(address)){
                $('#inputAddress').removeClass('is-invalid');
                $('#inputAddress').addClass('is-valid');

                if(city!=""){
                    $('#city').removeClass('is-invalid');
                     $('#city').addClass('is-valid');

                     if(state!=""){
                        $('#state').removeClass('is-invalid');
                        $('#state').addClass('is-valid');

                        if(zip!="" && zip.length==5 && /^[0-9]+$/.test(zip)){
                            $('#zip').removeClass('is-invalid');
                            $('#zip').addClass('is-valid');

                            if (commentLength>=8){
                                $('#comment').removeClass('is-invalid');
                                $('#comment').addClass('is-valid');
                                $("#error-comment").text('');

                                if(agreeTerms.is(':checked')){
                                    $('#agreeTerms').removeClass('is-invalid');
                                    $('#agreeTerms').addClass('is-valid');
                                    $("#error-agreeTerms").text('');

                                    $('#contact-form').submit();


                                }else{
                                    $('#agreeTerms').addClass('is-invalid');
                                    $('#agreeTerms').removeClass('is-valid');
                                    $("#error-agreeTerms").text('you should agree to our  terms and condition');


                                }

                            }else{
                                $('#comment').addClass('is-invalid');
                                $('#comment').removeClass('is-valid');
                                $("#error-comment").text('comment must be at least 8 character');
                            }

                         }else{
                             $('#zip').addClass('is-invalid');
                            $('#zip').removeClass('is-valid');
                         }


                    }else{
                       $('#state').addClass('is-invalid');
                       $('#state').removeClass('is-valid');
                    }


                 }else{
                     $('#city').addClass('is-invalid');
                     $('#city').removeClass('is-valid');
                 }


            }
            else{
                $('#inputAddress').addClass('is-invalid');
                $('#inputAddress').removeClass('is-valid');

            }


        }
        else{
            $('#name').addClass('is-invalid');
            $('#name').removeClass('is-valid');

        }


    }
    else{
        $('#email').addClass('is-invalid');
        $('#email').removeClass('is-valid');

    }
});

//evenement pour termes et condition
$('#agreeTerms').change(function(){
    let agreeTerms = $('#agreeTerms');

    if (agreeTerms.is(':checked')){
        $('#agreeTerms').removeClass('is-invalid');
        $('#agreeTerms').addClass('is-valid');
        $("#error-agreeTerms").text('');
    }
    else{
        $('#agreeTerms').addClass('is-invalid');
        $('#agreeTerms').removeClass('is-valid');
        $("#error-agreeTerms").text('you should agree to our  terms and condition');

    }
});
