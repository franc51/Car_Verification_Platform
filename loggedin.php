<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Car Verification Platform</title>
      <link rel="stylesheet" href="loggedin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <nav>
         
         <div class="logo">
            <img class="image" src="poze/romania(2).png">
            <h2 class="title">Car verification platform</h2>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a  href="loggedin.html">Home</a></li>
            <li><a class="active" href="database.html">Verify database</a></li>
            <li><a class="accept" href="signin.html">Sign Out</a></li>
            
         </ul>
      </nav>
      <div class="login-form">
         <form action="connect.php" method="post">
           <h1>Please insert car data below</h1>
           <div class="content">
             <div class="input-field">
               <input type="text" placeholder="Name of the owner" autocomplete="nope" name="name">
             </div>
             <div class="input-field">
               <input type="text" placeholder="vin no." autocomplete="nope" name="vinno">
             </div>
             <div class="input-field">
              <input type="text" placeholder="Make" autocomplete="nope">
            </div>
            
             <div class="input-field">
               <input type="text" placeholder="Model" autocomplete="nope">
             </div>
             <div class="input-field">
               <input type="text" placeholder="Fabrication year" autocomplete="nope">
             </div>
             <div class="input-field">
               <input type="text" placeholder="engine capacity" autocomplete="nope">
             </div>
             <div class="input-field">
               <input type="text" placeholder="maximum mass" autocomplete="nope">
             </div>
             <div class="input-field">
               <input type="text" placeholder="power" autocomplete="nope">
             </div>
             <div text-align="left">
               <label text-align="left"for="cars">Fuel </label>

               <select name="cars" id="cars">
                 <option value="volvo">Diesel</option>
                 <option value="saab">Petrol</option>
                 <option value="mercedes">Electric</option>
                 <option value="audi">Hybrid</option>
               </select> 
             </div>
             <div>
              <label name="result"for="cars">Technical Inspection Result</label>

              <select name="registration" id="verification">
                <option value="passed">Passed</option>
                <option value="rejected">Rejected</option>
             
              </select> 
            </div>
            <div>
              
                <label name="date" text-align="left" for="ccc">Date:</label>
                <input type="date" id="birthday" name="birthday">
      
            </div>

             <div >Please upload a picture of the car:
               <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg"><div id="display-image"></div>
               </div>
             </div>
             <div class="action">
              
               <input type="submit" value="submit" name="register-form">
               
              </div>
              </form>
           </div>
           
       
            </body>
         
      <footer>Department of Licences and Vehicle Registrations of Romania 2022</footer>
  <script>
   const image_input = document.querySelector("#image-input");image_input.addEventListener("change", function() {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    const uploaded_image = reader.result;
    document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
  </script>
   </body>
</html>