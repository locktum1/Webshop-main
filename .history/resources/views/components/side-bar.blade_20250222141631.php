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
    const open = false

    const btn = document.getElementById("left")
    const sidebar = document.querySelector(".side-bar")

    btn.addEventListener("click", function() {
        event.preventDefault();
        if (!open) {
            open = true
            sidebar.classList.add('side-bar-slide-in')
            sidebar.classList.remove('side-bar-slide-out')
        } else {
            open = false
            sidebar.classList.add('side-bar-slide-out')
            sidebar.classList.remove('side-bar-slide-in')
        }


    })
</script>
