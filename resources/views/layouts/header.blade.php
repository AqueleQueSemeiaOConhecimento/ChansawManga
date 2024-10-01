<header>
    <nav>
        <ul class="flex row p-6 pr-16 justify-between items-center bg-customBlack border-solid border-customOrange border-b-20">
            <li class="w-72 h-32 border-solid border-4 border-customOrange rounded-lg"><a href="/">
                <img class="w-full h-full white" src="{{ asset('images/layout/logo.jpg') }}" alt="Logo.jpg">
            </a></li>
            
            <li class="w-72 h-32 pb-2 flex justify-around items-end bg-[url('/images/layout/inicio.png')] bg-cover bg-center border-solid border-4 border-customOrange rounded-lg">
                <a class="text-customOrange font-kodemon text-4xl text-customOrange text-shadow-custom font-bold hover:text-black" href="/">Inicio</a>
                <a class="text-customOrange font-kodemon text-4xl text-customOrange text-shadow-custom font-bold hover:text-black" href="/">Obras</a>
            </li>

            <li class="bg-black p-6 border-solid border-4 border-customOrange rounded-full"><a href="/">
                <img class="w-12 h-12" src="{{ asset('images/layout/user.svg') }}" alt="User.svg">
            </a></li>


            <li class="bg-black p-6 border-solid border-4 border-customOrange rounded-full"><a href="/">
                <img class="w-12 h-12" src="{{ asset('images/layout/search.svg') }}" alt="User.svg">
            </a></li>
        </ul>
    </nav>
</header>