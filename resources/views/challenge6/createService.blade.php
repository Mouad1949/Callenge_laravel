<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
  

<form class="max-w-sm mx-auto mt-10" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
  @csrf
  <h1>Create Service</h1>
  <div class="mb-5">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
    <input type="text" name="title" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
    <textarea name="" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "></textarea>
  </div>
  <div class="mb-5">
    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Duration</label>
    <input type="number" name="duration" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
    <input type="number" name="duration" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
<label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Upload image</label>
  <input class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="image" type="file">
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Service</button>
</form>

</body>
</html>