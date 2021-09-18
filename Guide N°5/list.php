<?php
include('header.php');
include('nav.php');

require_once "Config/Autoload.php";

use Config\Autoload as Autoload;

use models\Beer as Beer;
use repository\BeerRepository as BeerRepository;

Autoload::start();

$repository = new BeerRepository();

$arrayBeers = $repository->getAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Titulo</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Code</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Type</th>
                    </thead>
                    <tbody>
                         <form action="process/deleteBeer.php" method="post">
                         <?php
                              if(isset($arrayBeers)){
                                   foreach($arrayBeers as $beer){
                                        ?>
                                             <tr>
                                                  <td><?php echo $beer->getCode();?></td>
                                                  <td><?php echo $beer->getName();?></td>
                                                  <td><?php echo $beer->getDescription();?></td>
                                                  <td><?php echo $beer->getType();?></td>
                                                  <td>
                                                       <button type="submit" name="btnDelete" clas="btn btn-danger" value="<?php echo $beer->getCode();?>">Delete</button>
                                                  </td>
                                             </tr>
                                        <?php
                                   }
                              }

                         ?>  
                         </form>
                         
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
