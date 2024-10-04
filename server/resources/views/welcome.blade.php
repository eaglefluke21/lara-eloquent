@extends('layout')

@section('title', 'Create Event')

@section('welcome')

<div class="flex flex-col items-center justify-center font-quick font-semibold mt-10 gap-10">

     <p class="font-anta font-light text-xl sm:text-2xl"> Welcome to Event Booking </p>

  <div class="flex items-center gap-2 text-md sm:text-lg"> 
        <p id="text-1"> Choose your Event </p>

        <a id="text-2" class="hover:underline hidden" href="{{route('eventcreate')}}"> Create New Event </a>

        <i id="toggle-icon" class="fas fa-repeat w-4 h-4 cursor-pointer" style="color: #000000;"></i>
  </div>


     <div>
          <section class=" flex items-center bg-slate-200 gap-1 sm:gap-2 shadow-lg py-4 sm:py-12 px-1  rounded-md ">
               
               <button id="prev" class=" bg-slate-300  p-2 rounded-full ">

                    <img src="https://cdn-icons-png.flaticon.com/512/271/271220.png" alt="Previous" class="  w-2 h-2 sm:w-4 sm:h-4">

               </button>

               <img id="slideshow" class="  w-72 sm:w-[30rem] lg:w-[40rem] object-fit rounded-lg " src="" alt="Event Image" />



               <button id="next" class=" bg-slate-300  p-2 rounded-full ">

                    <img src="https://cdn-icons-png.flaticon.com/512/271/271228.png" alt="Next" class= " w-2 h-2 sm:w-4 sm:h-4">
               </button>

          </section>
     </div>

</div>

<script>

//////////////////////////////////////////////////////////////       Image slider functionality ///////////////////////////////////////////////////
     const images = [
          "https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
          "https://images.unsplash.com/photo-1425421598808-4a22ce59cc97?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
          "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
     ];

     let currentImageIndex = 0;

     document.getElementById('slideshow').src = images[currentImageIndex];

     function updateImage(index) {
          if (index >= 0 && index < images.length) {
               document.getElementById('slideshow').src = images[index];
          }
     }

     document.getElementById('prev').addEventListener('click', function() {
          currentImageIndex = (currentImageIndex === 0) ? images.length - 1 : currentImageIndex - 1;
          updateImage(currentImageIndex);
     });

     document.getElementById('next').addEventListener('click', function() {
          currentImageIndex = (currentImageIndex === images.length - 1) ? 0 : currentImageIndex + 1;
          updateImage(currentImageIndex);
     });



////////////////////////////////////        Text toggle functionality  ///////////////////////////////////////////           
  const toggleIcon = document.getElementById('toggle-icon');
    const text1 = document.getElementById('text-1');
    const text2 = document.getElementById('text-2');

    toggleIcon.addEventListener('click', function() {
        if (!text1.classList.contains('hidden')) {
            text1.classList.add('hidden');
            text2.classList.remove('hidden');
        } else {
            text2.classList.add('hidden');
            text1.classList.remove('hidden');
        }
    });

</script>

@endsection