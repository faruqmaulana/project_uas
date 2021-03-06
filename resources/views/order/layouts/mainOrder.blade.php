<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../styles/style.css" rel="stylesheet">
    <style>
      .swal2-styled.swal2-default-outline:focus {
        box-shadow: transparent !important;
      }
      .swal2-styled.swal2-confirm:focus {
        box-shadow: transparent;
      }
    </style>
  </head>
  <body>
    @include('order.partials.orderNavbar')
    <div class="mb-5">
        @yield('container')
    </div>
    @include('order.partials.orderFooter')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session()->has('booked'))
    <script>
      $(setTimeout(() => { 
          Swal.fire({
          icon: 'success',
          title: 'Successfully booked!',
          text: '{{ Session::get("booked") }}',
          confirmButtonColor: '#A5DC86',
          showConfirmButton: true,
        })
      }, 300));
      </script>
    @endif
  </body>
</html>