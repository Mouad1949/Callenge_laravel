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
  

<div class="relative overflow-x-auto mt-2.5">
  <div><a class="bg-blue-400 p-2 mx-auto rounded-b-lg mt-2.5" href="services/create">Create Service</a></div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Duration
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($services as $serv)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$serv->title}}
                </th>
                <td class="px-6 py-4">
                    {{ $serv->description }}
                </td>
                <td class="px-6 py-4">
                    {{$serv->duration}}
                </td>
                <td class="px-6 py-4">
                    {{ $serv->price }}
                </td>
                <td class="px-6 py-4">
                    <img alt="" src={{ $serv->imsge }}>
                </td>
            </tr>
          @endforeach
          
            
        </tbody>
    </table>
</div>

</body>
</html>