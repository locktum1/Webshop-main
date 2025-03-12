<div class="side-bar">
    <ul>
        <li>
            Search
        </li>
        <li>
            Browse
        </li>
    </ul>
</div>

<script>
    const btn = document.getElementById("left")
    const imageButtons = document.querySelectorAll(".product-spill-image")

    imageButtons.forEach(button => {
        button.addEventListener("click", () => {
            image.src = button.getAttribute("src")
        })
    });
</script>
