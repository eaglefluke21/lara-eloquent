@extends('layout')


<div class="flex justify-center pt-20">

<form action="{{route('eventstore')}}" class="flex flex-col items-center justify-center  font-quick font-semibold p-2 py-12 border border-gray-200 shadow-lg shadow-gray-300 w-80 sm:w-[30rem] lg:w-[40rem] bg-white rounded-md "  method="POST">
    @csrf
    
    <label class=" text-gray-500" for="title">Event Title</label>
    <input class="w-3/4 rounded-md border border-gray-400 mb-4  shadow-inner font-medium text-sm ps-2 py-1" type="text" id="title" name="title" required>

    <label class=" text-gray-500"  for="description">Event Description</label>
    <textarea  class="w-3/4 rounded-md border border-gray-400  shadow-inner  mb-4 font-medium text-sm ps-2 py-2" id="description" name="description" required></textarea>

    <label class=" text-gray-500" for="date">Event Date</label>
    <input class="w-3/4 rounded-md border border-gray-400   shadow-inner   mb-4 ps-1 pe-1 text-gray-500 font-medium text-sm py-1" type="date" id="date" name="date" required>

    <label class="text-gray-500" for="image_url">Image URL</label>
    <input class="w-3/4 rounded-md border border-gray-400 shadow-inner mb-4 ps-1 pe-1 text-gray-500 font-medium text-sm py-1" type="text" id="image_url" name="image_url" required>

    <button class=" rounded-md font-medium bg-black border-2 text-white hover:bg-white hover:text-black hover:border-black px-2 py-1 mt-10"  type="submit"> Create Event</button>
    </form>

    </div>

