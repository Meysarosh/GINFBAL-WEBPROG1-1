 <main class="main">
   <form action="?page=singin" method="post">
     <fieldset>
       <legend>Bejlentkezés</legend>
       <br>
       <label class="label" for="username">Username:</label>
       <input type="text" name="username" id="username" required><br><br>
       <label class="label" for="password">Password:</label>
       <input type="password" name="password" required><br><br>
       <input type="submit" name="singin" value="Singin">
       <br>&nbsp;
     </fieldset>
   </form>
   <h3>Register yourself if not a user yet!</h2>
     <form action="?page=singup" method="post">
       <fieldset>
         <legend>Registration</legend>
         <br>
         <label class="label" for="last_name">Last name:</label>
         <input type="text" name="last_name" id="last_name" required><br><br>
         <label class="label" for="first_name">First name:</label>
         <input type="text" name="first_name" id="first_name" required><br><br>
         <label class="label" for="email">Email:</label>
         <input type="email" name="email" id="email" required><br><br>
         <label class="label" for="username">Username:</label>
         <input type="text" name="username" id="username" required><br><br>
         <label class="label" for="password">Password:</label>
         <input type="password" name="password" required><br><br>
         <label class="label" for="password-confirm">Confirm password:</label>
         <input type="password" name="password-confirm" required><br><br>
         <input type="submit" name="singup" value="Singup">
         <br>&nbsp;
       </fieldset>
     </form>
 </main>