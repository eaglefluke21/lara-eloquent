



  

<form class="flex flex-col items-center justify-center  bg-gray-100"  method="POST">
    @csrf
    <label for="title">Event Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Event Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="date">Event Date:</label>
    <input type="date" id="date" name="date" required>

    <button className="font-quick font-semibold border-2 border-gray-800 bg-gray-100 hover:bg-black hover:text-white  hover:shadow-custom-inner-sky-400  w-64 sm:w-96"  type="submit"> Create Event</button>
    </form>



