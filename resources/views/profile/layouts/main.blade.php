<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Uas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="../styles/style.css" rel="stylesheet">
  </head>
  <body>
    @include('profile.partials.navbar')
    <div class="mb-5">
        @include('profile.partials.profileNav')
    </div>
    @include('profile.partials.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>

<script>
        const togglePass = document.querySelector("#togglePass");
        const pass = document.querySelector("#pass");

        togglePass.addEventListener("click", function () {
            // toggle the type attribute
            const type = pass.getAttribute("type") === "password" ? "text" : "password";
            pass.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>

    <!-- confirm button -->
    <script>
      $('.update-data').click(function(event){
        var form = jQuery("#submitForm");
        event.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "Wanna change your profile?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#ed1f24',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#process").html("Processing...");
            setTimeout(() => {
              form.submit();
            }, 1000);
          }
        })
      })
    </script>

    <!-- confirm name -->
    <script>
      $('.update-name').click(function(event){
        var form = jQuery("#nameSubmit");
        event.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "Wanna change your name profile?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#ed1f24',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        })
      })
    </script>

    <!-- confirm password -->
    <script>
      $('.update-password').click(function(event){
        var form = jQuery("#passwordSubmit");
        event.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "Wanna change your password?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#ed1f24',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        })
      })
    </script>

    <!-- confirm delete -->
    <script>
      $('.delete-data').click(function(event){
        var form = $(this).closest("#deleteSubmit");
        event.preventDefault();
        Swal.fire({
          title: 'Are you sure you want to delete this ticket record?',
          text: "If you delete this, it will be gone forever.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#ed1f24',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        })
      })
    </script>

    @error('username')
    <script>
      $(setTimeout(() => { 
          Swal.fire({
          icon: 'error',
          title: 'Update failed!',
          text: '{{ $message }}',
          showConfirmButton: false,
          timer: 2000
        })
      }, 100));
      </script>
    @enderror
    
    @if(session()->has('Error'))
    <script>
      $(setTimeout(() => { 
          Swal.fire({
          icon: 'error',
          title: 'Update failed!',
          text: '{{ Session::get("Error") }}',
          showConfirmButton: true,
        })
      }, 200));
      </script>
    @endif

    @if(session()->has('updateSuccess'))
    <script>
      $(setTimeout(() => { 
          Swal.fire({
          icon: 'success',
          title: 'Update successfully!',
          text: '{{ Session::get("updateSuccess") }}',
          showConfirmButton: false,
          timer: 2000
        })
      }, 200));
      </script>
    @endif

    @if(session()->has('delete'))
    <script>
      $( 
          Swal.fire({
          icon: 'success',
          title: 'Delete successfully!',
          text: '{{ Session::get("delete") }}',
          showConfirmButton: false,
          timer: 2000
        }));
      </script>
    @endif

    <script>

    </script>
  </body>
</html>