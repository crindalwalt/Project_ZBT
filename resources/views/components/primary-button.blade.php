<style>


</style>
<button style="
        color: #ffffff;
        background-size: 300% 100%;
        background-image: linear-gradient(to right, #2f57ef, #b966e7,#b966e7, #2f57ef);
        text-align: center;
        "

    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
