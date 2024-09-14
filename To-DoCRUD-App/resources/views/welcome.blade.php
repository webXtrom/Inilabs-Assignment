<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto;
      }
      .btn{
        @apply bg-green-600 text-white rounded py-2 px-4;
      }
    }
  </style>
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="flex justify-between my-5">
      <h2 class="text-red-500 text-xl">Home</h2>
      <a href="/create" class="btn">Add New Product</a>
    </div>
    @if (session('success'))
        <h2 class="text-green-600 w-80 px-4 py-2 border-2 border-lime-300 rounded"><i class="fa fa-check" style="padding-right: 10px;"></i>{{ session('success')}}</h2>
        
        @endif
    <div class="">
      <div class="flex flex-col my-20 border-2 py-5 rounded">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Image</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Product Name</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Product Price</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr class="odd:bg-white even:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->id}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><img src="images/{{$post->image}}" width="80px" alt=""></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->pname}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->price}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->pdescription}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a href="{{route('edit', $post->id)}}" class="btn">Edit</a>
                        <a href="{{route('delete', $post->id)}}" class="bg-red-600 text-white rounded py-2 px-4">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>