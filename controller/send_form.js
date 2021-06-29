function save_data(){
    // Prikputi elemente sa klasom form_data
    var form_element = document.getElementsByClassName("form_data");

    // Nova Ajax funkcija
    var form_data = new FormData();

    // Dodavanje imena i vrednosti u form data 
    var count = 0;
    for(count; count<form_element.length; count++)
    {
        // Kao array push u form datu
        form_data.append(form_element[count].name, form_element[count].value);
    }

    // Stanje za button submit stavljamo kao true
    document.getElementsById('submit').disabled = true;
    
    // Novi Ajax zahtev
    var ajax_request = new XMLHttpRequest();
    ajax_request.open('GET','form_request.php');
    
    // Sta saljemo
    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function()
    {   
        if(ajax_request.readyState == 4 && ajax_request.status == 200)
        {
            // Stavlja dugme u false stanje
            document.getElementsByName('submit').disabled = false;
            // Cisti formu i resetuje je
            document.getElementsById('form').reset();

            document.getElementsById('message').innerHTML = ajax_request.responseText;

            setTimeout(function(){

                document.getElementsById('message').innerHTML = '';
            },2000);
        }
    }

}