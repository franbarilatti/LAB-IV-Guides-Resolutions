<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar cerveza</h2>

               <form action="process/actionBeer.php" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Beer Code</label>
                                   <input type="Text" name="beerCode" value="" class="form-control">
                                   <label for="">Beer Name</label>
                                   <input type="Text" name="beerName" value="" class="form-control">
                                   <label for="">Description</label>
                                   <input type="Text" name="description" value="" class="form-control">
                                   <label for="">Type</label>
                                   <input type="Text" name="type" value="" class="form-control">
                              </div>
                         </div>
                         
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
