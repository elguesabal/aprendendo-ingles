<div id="backgroundResult" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="relative bg-white p-6 rounded shadow-md w-64 text-center" id="boxResult">
        <i class="bi bi-x-lg absolute top-3 right-3 rounded hover:bg-gray-100 cursor-pointer transition duration-500 ease-in-out" id="closeResult"></i>
        <i class="text-5xl bi" id="iconResult"></i>
        <p class="text-xl" id="result"></p>
    </div>
    <script>
        const elements = ["{{ $idBtn }}", "backgroundResult", "boxResult", "closeResult"];

        elements.forEach(element => {
            document.getElementById(element).addEventListener("click", (event) => {
                if (event.target.id == "boxResult") return ;
                document.getElementById("backgroundResult").classList.toggle("hidden");
            });
        });
        document.getElementById("{{ $idInput }}").addEventListener("keydown", (event) => {
            if (event.key != "Enter") return ;
            document.getElementById("backgroundResult").classList.toggle("hidden");
        });
    </script>
</div>