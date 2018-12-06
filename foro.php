<?php
include ("header.php");
include ("side-bar.php");
?>
<div class="main-body">
<div class="main-container">
  <div class="col-md-12 mb-max">

     <h3 class="text-center">Foro</h3>
  </div>
  <div class="row">
     <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <a class="nav-link active" id="v-pills-home-tab" class="btn btn-info" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Preparación de alimentos</a>
           <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Suplementación</a>
           <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tips de ejercicios</a>
        </div>
     </div>
     <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="container">
                 <div class="row">
                    <div class="col-9">
                       <div class="accordion" id="accordionExample">
                          <div class="card">
                             <div class="card-header" id="headingOne">
                              <h5 class="mb-0">

                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   Pregunta :
                                   </button>
                                </h5>
                             </div>
                          </div>
                          <?
                               include ("forofacebook.php");
                               ?>
                          <div class="col-3">
                             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                   respuestas.....
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col">
                       <button type="button" class="btn btn-primary">Responder</button>
                    </div>
                 </div>
              </div>
              <div class="form-group">
                 <label for="comment">Pregunta n:</label>
                 <textarea class="form-control" rows="5"  id="comment"></textarea>
              </div>
           </div>
           <div id="demo2" class="collapse">
              <div class="form-group">
                 <label for="comment">Comment:</label>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
           </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
           <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
           </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
     </div>
  </div>
</div>
</div>
<?php
include("footer.php");
?>