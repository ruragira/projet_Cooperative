<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"> de donnees</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Identification</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Cooperation</span>
                      </button>
                    </div>
					<div class="line"></div>
					 <div class="step" data-target="#information-par">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-par" id="information-par-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Various information</span>
                      </button>
                    </div>
					
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                    <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationCustom01" name="nom" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="validationCustom02" name="prenom" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    
   <label for="validationCustom02" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="validationCustom02" name="adresse" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
                      
  </div>
  <div class="col-md-6">
     <label>Niveau </label>
                               <select class="form-control select2" name="niveau" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                             </select>
  </div>
  <div class="col-md-3">
      <label>Faculte</label>
                  <select class="form-control select2" name="faculte"  style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                             </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <!--<div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>-->
 <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>-->
  <!--<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>-->
</form>

                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom de votre Cooperation</label>
    <input type="email" name="nom_coop" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nombre</label>
    <input type="text" name="nbre_coop" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Addresse de votre Cooperation</label>
    <input type="text" name="adresse_coop" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Titre</label>
    <input type="text" name="titre_coop" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Objectif de votre Cooperation</label>
     <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" name="obj_coop" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Motivation</label>
     <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" name="mo_coop" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Besoin Apprendre</label>
    <input type="text" name="b_coop" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Attente</label>
    <input type="text" name="att_coop" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Module Propose</label>
    <input type="text" name="pro_coop" class="form-control" id="inputZip">
  </div>
  <!--<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>-->
  <!--<div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>-->
</form>
					  
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
					  <button class="btn btn-primary" onclick="stepper.next()">Next_</button>
					  
                    </div>
					  <div id="information-par" class="content" role="tabpanel" aria-labelledby="information-par-trigger">
                     
                        <label for="exampleInputFile">File input</label>
                       
                      <p>hsdhgjdsbgklsdgjalsbdglsjdglasdgjaslkgjsbdkgsbgjksdfgbgiergrgdugkjdfvxcnvncxmvnnnjbhfdhfbdjbhjdfbhdbnmxnbxnbm</P>
					  
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
					  
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>