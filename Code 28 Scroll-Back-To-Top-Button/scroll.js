// Don't forget to follow me @ https://github.com/Sonvendra/

window.onscroll=function() {scrollFunction()};
        
        function scrollFunction(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                document.getElementById("scrollBtn").style.display = "block";
            }
            else{
                document.getElementById("scrollBtn").style.display = "none";
            }
        }
        
        // When user clicks on the button, scroll to the top
        function topFunction(){
            document.body.scrollTop = 0;  // for safari
            document.documentElement.scrollTop = 0;  // for firefox, chrome, IE and opera
        }
