<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
    <style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto;
      }
    }
  </style>
  
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="flex justify-between my-5">
          <h2 class="text-red-500 text-xl">Edit - {{$ourPost->pname}}</h2>
          <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>
        @if (session('success'))
        <h2 class="text-green-600 w-80 px-4 py-2 border-2 border-lime-300 rounded"><i class="fa fa-check" style="padding-right: 10px;"></i>{{ session('success')}}</h2>
        
        @endif
        <div>
            <form method="POST" action="{{route('update', $ourPost->id)}}" 
            class="border-2 px-20 py-20 border-slate-300 rounded" style="margin-top:50px;margin-bottom:50px;" enctype="multipart/form-data">
            @csrf
                <div class="flex flex-col gap-3">
                    <label for="">Product Name</label>
                    <input type="text" name="pname" value="{{$ourPost->pname}}">
                    @error('pname')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <label for="">Product Price</label>
                    <input type="number" name="price" value="{{$ourPost->price}}">
                    @error('price')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <label for="large-input">Product Description</label>
                    <input type="text" name="pdescription" role="textarea" value="{{$ourPost->pdescription}}">
                    @error('pdescription')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <label for="">Select Image</label>
                    <input type="file" name="image">
                    @error('image')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                      <input type="submit" class="bg-green-600 text-white rounded py-2 px-4 inline-block">
                    </div>
                   
                </div>
            </form>
        </div>
    </div>
</body>
</html>