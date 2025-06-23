<!-- Header Section -->
<header class="bg-dark text-white py-5" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
    <div class="container">
        <h1 class="display-4">Welcome to the QuietPress</h1>
        <p class="lead"><span id="changing-word">Craft your story. Share it with the world.</span></p>
    </div>
</header>

<script>
    const words = ["Craft your story. Share it with the world.", "Thoughtfully written. Quietly impactful.", "A home for mindful writing.", "Blog better, blog quieter."];
    let index = 0;
    const el = document.getElementById("changing-word");

    function changeWord() {
        el.classList.remove("show");

        setTimeout(() => {
            index = (index + 1) % words.length;
            el.textContent = words[index];
            el.classList.add("show");
        }, 500);
    }

    el.classList.add("show");
    setInterval(changeWord, 2500);
</script>
