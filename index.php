   <!DOCTYPE html>
   <html>

   <head>
         <title>Popup Contact</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link type="text/css" rel="stylesheet" href="css/style.css">       
   </head>

   <body>


       <img src="img/Chaticon.png" class="chatOn" onclick="openForm()">

       <div class="chat-popup" id="myForm">
           <form action="send.php" method="post" class="popup-form">
               <p>Please let us know if there are any issues</p><br>

               <label for="Messages"><b>Messages</b></label><br>
               <textarea placeholder="Your Messages" name="message" required></textarea><br>

               <label for="email"><b>Email</b></label><br>

               <input type="text" placeholder="Your email" name="email" required><br>
               <button type="submit" class="button">Send</button>

               <button type="button" class="button chatOff" onclick="closeForm()">Close</button>
           </form>
       </div>

       <script>
           function openForm() {
               document.getElementById("myForm").style.cssText = "display: block;";
           }

           function closeForm() {
               document.getElementById("myForm").style.cssText = "display: none;";
           }
       </script>
       

   </body>

   </html>