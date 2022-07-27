<div class="flex w-full justify-center mt-10">
    <form class="w-1/2" action="">
        <label for="stadium" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-400">Stadion</label>
        <select id="stadium" wire:model.lazy="stadiumId"
                class="block py-3 px-4 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Stadion seçin</option>
            @foreach($stadiums as $stadium)
                <option value="{{$stadium->id}}">{{$stadium->name}}</option>
            @endforeach
        </select>

        <label for="date" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-400">Date</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                          clip-rule="evenodd"></path>
                </svg>
            </div>
            <input datepicker datepicker-autohide id="date" type="text" name="date" wire.model.lazy="date"
                   class="block py-3 px-4 pl-11 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Tarix seçin">
        </div>

        <label for="time" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-400">Time</label>
        <select id="time"
                class="block py-3 px-4 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose timeslot</option>
            <option value="US">10:00 - 11:00</option>
            <option value="CA">11:00 - 12:00</option>
            <option value="FR">12:00 - 13:00</option>
            <option value="DE">13:00 - 14:00</option>
        </select>

        <div class="mt-2.5 ml-auto">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sifariş et</button>
        </div>

    </form>
</div>

