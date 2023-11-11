
 <!-- complaint redirect -->
 <script>
            // Get a reference to the anchor element
            const reclamationsLink = document.getElementById('reclamationsLink');
        
            // Add a click event listener to the anchor element
            reclamationsLink.addEventListener('click', function(event) {
                // Prevent the default link behavior to stop the browser from navigating immediately
                event.preventDefault();
        
                // Redirect to the "complaint_form.html" page
                window.location.href = 'complaint_form.html';
            });


            // message redirect
            // Get a reference to the anchor element
            const messageLink = document.getElementById('messageLink');
        
            // Add a click event listener to the anchor element
            messageLink.addEventListener('click', function(event) {
                // Prevent the default link behavior to stop the browser from navigating immediately
                event.preventDefault();
        
                // Redirect to the "complaint_form.html" page
                window.location.href = 'message_form.html';
            });


            //redirection for transcripts
            // Redirect to the "transcript_form.html" page
        const bulletinLink = document.getElementById('bulletinLink');
        bulletinLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            window.location.href = 'transcript_form.html'; // Redirect to the desired page
        });

        //certificate redirection
            // Redirect to the "transcript_form.html" page
            const certificate = document.getElementById('certificateLink');
        bulletinLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            window.location.href = 'certificate_form.html'; // Redirect to the desired page
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('style/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('style/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('style/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('style/js/datatables-simple-demo.js')}}"></script>