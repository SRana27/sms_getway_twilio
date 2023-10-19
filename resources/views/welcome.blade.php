<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
 <div class="container">
     <div class="row text-center">
         <div class="col-12">
             <div class="col-md-6 text-center">
                 <p>

                 </p>
                 <form action="{{route('sendsms')}}" method="post">
                     @csrf
                     @if($message=Session::get('message'))

                         <div class="alert alert-success alert-dismissible fade show text-center">
                             {{$message}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                         </div>
                     @endif
                   <h1>Send sms by twilio </h1>
                     <div class="mb-2">
                         <input type="text" class="form-control" name="phone" placeholder ="enter phone number ">
                     </div>
                     <div  class="mb-2">
                         <textarea class="form-control" placeholder ="enter message " name="message"></textarea>
                     </div>
                     <div  class="mb-2 text-center">
                         <input type="submit" class="btn btn-success "  value=" send sms">
                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>

</body>
</html>
