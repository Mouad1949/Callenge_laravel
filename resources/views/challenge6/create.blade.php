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
  
@if ($status == 'create')
<form class="max-w-sm mx-auto mt-10" method="POST" action="{{ route('bookings.store') }}">
@else
<form class="max-w-sm mx-auto mt-10" method="POST" action="{{ route('bookings.edit',$booking->id ) }}">
@csrf
@method('PATCH')
@endif
@csrf

  <h1>Create Booking</h1>
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">date</label>
    <input type="date" value="{{ $status=='update' ? $booking->date :'' }}" name="date" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 ">time</label>
    <input type="time" value="{{ $status=='update' ? $booking->time :'' }}" name="time" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">status</label>
    <input type="text" value="{{ $status=='update' ? $booking->status :'' }}" name="status" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
  </div>
  <div class="mb-5">
  <label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Service</label>
  
  <select multiple name="service_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
    @foreach ($service as $item)<option value="{{ $item->id }}"> {{ $item->title }}</option>@endforeach
  </select>
  
  
  </div>



  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Booking</button>
</form>

</body>
</html>