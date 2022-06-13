@extends('layouts.main')
@section('container')
  
  <!-- Support Center Section -->

<section>
  <div class="container mt-5 px-5">
    <p class="title-section-primary">Support Center</p>
    <p class="title-section-secondary" style="btn:hover{color: var(--white-color)}">Chat Directly With Our Representative</p>
    <div class="row ">

      <div class="col-6 ">

        <div class="costumer-service d-flex flex-row  mb-4">
          <img src="assets/support-center/someone.png" alt="" class="img-thumbnail rounded-circle" style="width:66px">                  
            <div class="d-flex flex-column mx-2 flex-grow-1  justify-content-center">
              <p class="fw-bold my-0">Gwen Isabella</p>
              <p class="fw-lighter fs-6 my-0" ><small>costumer service</small></p>
            </div>
            <div class="d-flex flex-column justify-content-center mx-4">
              <button type="button" class="rounded-pill btn-md btn btn-outline-danger px-4" style="btn:hover{color: var(--white-color)}">Chat</button>
            </div>          
        </div>
        
        <div class="costumer-service d-flex flex-row mb-4">
          <img src="assets/support-center/someone.png" alt="" class="img-thumbnail rounded-circle z-depth-2 " style="width:66px">        
          <div class="d-flex flex-column mx-2  flex-grow-1 justify-content-center">
            <p class="fw-bold my-0">Gwen Isabella</p>
            <p class="fw-lighter fs-6 my-0" ><small>costumer service</small></p>
          </div>
          <div class="d-flex flex-column justify-content-center mx-4">
            <button type="button" class="rounded-pill btn-md btn btn-outline-danger px-4" style="btn:hover{color: var(--white-color)}">Chat</button>
          </div>   
        </div>

        <div class="costumer-service d-flex flex-row mb-4">
          <img src="assets/support-center/someone.png" alt="" class="img-thumbnail rounded-circle z-depth-2 "style="width:66px">        
          <div class="d-flex flex-column mx-2 flex-grow-1 justify-content-center">
            <p class="fw-bold my-0">Gwen Isabella</p>
            <p class="fw-lighter fs-6 my-0" ><small>costumer service</small></p>
          </div>
          <div class="d-flex flex-column justify-content-center mx-4">
            <button type="button" class="rounded-pill btn-md btn btn-outline-danger px-4" style="btn:hover{color: var(--white-color)}">Chat</button>
          </div>   
        </div>
        
        <div class="costumer-service d-flex flex-row mb-4">
          <img src="assets/support-center/someone.png" alt="" class="img-thumbnail rounded-circle z-depth-2 "style="width:66px">        
          <div class="d-flex flex-column mx-2 flex-grow-1 justify-content-center">
            <p class="fw-bold my-0">Gwen Isabella</p>
            <p class="fw-lighter fs-6 my-0" ><small>costumer service</small></p>
          </div>
          <div class="d-flex flex-column justify-content-center mx-4">
            <button type="button" class="rounded-pill btn-md btn btn-outline-danger px-4" style="btn:hover{color: var(--white-color)}">Chat</button>
          </div>   
        </div>        
      </div>

      <div class="col">
        <img src="assets/support-center/help-person.png" class="figure-img img-fluid rounded" >
      </div>

    </div>
  </div>
</section>

<!-- End Of Support Center Section -->

<!-- Feedback Section -->
<section>
  <div class="container mt-5 px-5">
    <p class="title-section-primary">Feedback</p>
    <p class="title-section-secondary">Send Your Feedback Here</p>
    <div class="row d-flex flex-column justify-content-center">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea><label for="floatingTextarea"></label>      
      </div>
      <div class="col d-flex flex-column align-items-end">
        <div class="mt-4">
          <button type="button" class="btn btn-red font-md font-white font-bold px-4">SEND</button>
        </div> 
      </div>
    </div>      
</section>
<!-- End Of Feedback Section -->

@endsection