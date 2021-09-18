<?php
    include('header.php');
    require_once "models/User.php";

    use model\User as User;

    session_start();
    if(isset($_SESSION['loggedUser'])){
        $user = $_SESSION['loggedUser'];
    }  
?>
<div class="container mt-5">
  <h2 style="text-aling: center;">Que onda perrooo</h2>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">userName</th>
        <th scope="col">First name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Password</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><?php echo $user->getUserName();?></th>
        <td><?php echo $user->getFirstName();?></td>
        <td><?php echo $user->getLastName();?></td>
        <td><?php echo $user->getPassword();?></td>
        <td><?php echo $user->getEmail();?></td>
      </tr>
    </tbody>
  </table>
  <div class="container">
    <form action="process/changeUser.php" method="post">
    <div class="row" >
        <div class="col-md-10">
            <button name="do" value="continue" class="btn btn-success">Continue</button>
        </div>
        <div class="col-md-10">
        <button name="do" value="exit" class="btn btn-danger">Exit</button>
        </div>

    </div>
  
  </form>
  </div>
</div>

