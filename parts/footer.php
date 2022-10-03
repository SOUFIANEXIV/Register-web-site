

<div class="position-relative  ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form    action="index.php" <?php $_SERVER['PHP_SELF'] ?> method='post' >
<h3  class="text-center tracking-in-contract  font-monospace ">Register Here </h3>
<div class="form-floating mb-3">
 <input type="text" class="form-control "  name="firstname"  id="firstname"      placeholder="Firstname"         value="<?php echo $firstname; ?>"      >
 <label for="floatingInput">Firstname</label>
 <div class="form-text-error">
 <?php  echo  $errors['firstnameError'] ?>
 </div>
</div>

 

<div class="form-floating mb-3">
 <input type="text" class="form-control "  name="lastname" id="lastname"       value="<?php echo $lastname; ?>"     placeholder="lastname"   >
 <label for="floatingInput">Lastname</label>
 <div class="form-text-error">
 <?php  echo  $errors['lastnameError']  ?>
 </div>
</div>
<div class="form-floating mb-3">
 <input type="email" class="form-control"  name="email" id="email"         value="<?php echo $email; ?>"           placeholder="name@example.com"   >
 <label for="floatingInput">Email</label>
 <div class="form-text-error">
 <?php  echo $errors['emailError']  ?>
 </div>
</div>

<label for="floatingInput">Gender

<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender"  value="Male"  >
  <label class="form-check-label" for="flexRadioDefault1">
   Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender" value="Female">
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
</label>



<div class="mb-1  mt-2">
 <input type="submit" name="submit"    class="btn btn-primary "   value="send">

 </div>
  </form>


</div>
</div>
</div>


<idv id="loader-con">

<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</idv>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-4 mx-auto"   >
<button   id="winners"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >THE WINNER IS !!</button>
</div>


 

<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog   modal-dialog-centered  ">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modal">THE WINNER IS</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?php   foreach($users as $user) :  ?>
      <div class="modal-body text-center  fs-3 ">
      <?php echo  htmlspecialchars($user['firstname']) . ' '. htmlspecialchars($user['lastname']) ; echo "</br>";   echo  htmlspecialchars($user['email']) ?>
      </div>
      <?php  endforeach;
         ?>

    </div>
  </div>
</div>




















   </div>
<script  src="./js/bootstrap.bundle.min.js"></script>

<script src="./js/index.js"> </script>  

</body>
</html>
